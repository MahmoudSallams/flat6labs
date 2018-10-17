<?php
/**
 * count discount price when customer use coupon code
 */
namespace Ideas\Shop\Facades;

use Carbon\Carbon;
use Ideas\Shop\Models\CouponHistory;
use Ideas\Shop\Models\CouponToCategory;
use Ideas\Shop\Models\CouponToProduct;
use Ideas\Shop\Models\IdeasShop;
use Ideas\Shop\Models\ProductChildToCategory;
use Ideas\Shop\Models\ProductToCategory;
use Ideas\Shop\Models\TaxRate;
use \October\Rain\Database\Model;

class Coupon extends Model
{
    /**
     * Get category by product id
     */
    public static function getCategoryByProductIdForCoupon($productIdArray)
    {
        $rsSimple = ProductToCategory::whereIn('product_id', $productIdArray)
            ->get()->toArray();
        $rsChildConfig = ProductChildToCategory::whereIn('product_id', $productIdArray)
            ->get()->toArray();
        $rs = [];
        foreach ($rsSimple as $row) {
            $rs[$row['product_id']][] = $row['category_id'];
        }
        foreach ($rsChildConfig as $row) {
            $rs[$row['product_id']][] = $row['category_id'];
        }
        return $rs;
    }


    /**
     * Get category by product Id array
     */
    public static function getCategoryForCoupon($cart)
    {
        $category = [];
        if (!empty($cart)) {
            $productIdArray = [];
            foreach ($cart as $row) {
                $productIdArray[] = $row['id'];
            }
            $category = self::getCategoryByProductIdForCoupon($productIdArray);
        }
        return $category;
    }

    /**
     * Get category and product can used this coupon
     */
    public static function getCategoryAndProductCanUsedCoupon($couponId)
    {
        $category = CouponToCategory::where('coupon_id', $couponId)->get();
        $product = CouponToProduct::where('coupon_id', $couponId)->get();
        $categoryIdArray = [];
        $productIdArray = [];
        foreach ($category as $row) {
            $categoryIdArray[] = $row->category_id;
        }
        foreach ($product as $row) {
            $productIdArray[] = $row->product_id;
        }
        return [
            'category' => $categoryIdArray,
            'product' => $productIdArray
        ];
    }

    /**
     * Calculate discount
     */
    public static function calculateDiscount($couponType, $couponDiscount, $row)
    {
        $price = $row['price'];
        $qty = $row['qty'];
        if ($couponType == TaxRate::TYPE_PERCENTAGE) {//percentage
            $discount = ($price - ($price * ($couponDiscount / 100))) * $qty;
        } else {//fixed
            $discount = ($price - $couponDiscount) * $qty;
        }
        return $discount;
    }

    /**
     * Get final discount when not for all
     * If product can just use coupon and to be in a category that can use coupon => privilege : product
     */
    public static function getDiscountWhenCouponNotForAll($cart, $couponData)
    {
        $category = self::getCategoryForCoupon($cart);
        $canUsedCoupon = self::getCategoryAndProductCanUsedCoupon($couponData->id);
        $couponType = $couponData->type;
        $couponDiscount = $couponData->discount;
        //recount cart
        $discount = 0;
        foreach ($cart as $row) {
            if (in_array($row['id'], $canUsedCoupon['product'])) {
                //if in productIdArray can use coupon
                $discount += self::calculateDiscount($couponType, $couponDiscount, $row);
            } elseif (array_key_exists($row['id'], $category)) {
                //if in categoryIdArray can use coupon
                $discount += self::calculateDiscount($couponType, $couponDiscount, $row);
            } else {//if not in all
                $discount += $row['price'] * $row['qty'];
            }
        }
        return ['rs' => true, 'error'=> '', 'discount_price' => $discount, 'coupon_id'=>$couponData->id];
    }

    /**
     * Get final discount
     */
    public static function getFinalDiscount($couponData, $totalPrice, $cart)
    {
        $isCouponForAll = $couponData->is_for_all;
        if ($isCouponForAll == \Ideas\Shop\Models\Coupon::IS_FOR_ALL) {
            //when coupon for all category and product
            $type = $couponData->type;
            $discount = $couponData->discount;
            if ($type == TaxRate::TYPE_PERCENTAGE) {//type percentage
                $discountPrice = $totalPrice - ($totalPrice * ($discount / 100));
            } else {//type fixed
                $discountPrice = $totalPrice - $discount;
            }
            return ['rs' => true, 'error'=> '', 'discount_price' => $discountPrice, 'coupon_id'=>$couponData->id];
        } else {
            return self::getDiscountWhenCouponNotForAll($cart, $couponData);
        }
    }

    /**
     * Get history of coupon
     */
    public static function getCouponHistory($id)
    {
        $data = CouponHistory::select('id', 'customer_id')->where('coupon_id', $id)->get();
        $customerIdArray = [];
        $i = 0;
        foreach ($data as $row) {
            $customerIdArray[] = $row->customer_id;
            $i++;
        }
        $arrayCountCustomer = [];
        if (!empty($customerIdArray)) {
            //count how many times each customer use this coupon
            $arrayCountCustomer = array_count_values($customerIdArray);
        }
        $rs = [
            'num_used' => $i,
            'array_customer_id' => $arrayCountCustomer
        ];
        return $rs;
    }

    /**
     * Is coupon can used
     */
    public static function calculateDiscountPrice($couponData, $totalPrice, $cart, $loggedIn)
    {
        $error = [
            'disable' => trans('ideas.shop::lang.error_coupon.disable'),
            'total_not_enough' => trans('ideas.shop::lang.error_coupon.total_not_enough'),
            'not_valid_date' => trans('ideas.shop::lang.error_coupon.over_time'),
            'need_logged_in' => trans('ideas.shop::lang.error_coupon.need_logged_in'),
            'num_used_over' => trans('ideas.shop::lang.error_coupon.num_used_over'),
            'num_used_per_customer' => trans('ideas.shop::lang.error_coupon.num_used_per_customer'),
        ];

        //check if this coupon is disable
        if ($couponData->status == IdeasShop::DISABLE) {
            return ['rs' => false, 'error'=> $error['disable'], 'discount_price' => 0, 'coupon_id'=>0];
        }

        //check if total amount enough to use this coupon
        if ($couponData->total > $totalPrice) {
            return ['rs' => false, 'error'=> $error['total_not_enough'], 'discount_price' => 0, 'coupon_id'=>0];
        }

        //check if this coupon is valid in date
        $now = strtotime(Carbon::now());
        $startDate = strtotime(Carbon::createFromFormat('Y-m-d H:i:s', $couponData->start_date));
        $endDate = strtotime(Carbon::createFromFormat('Y-m-d H:i:s', $couponData->end_date));
        if ($now < $startDate || $now > $endDate) {
            return ['rs' => false, 'error'=> $error['not_valid_date'], 'discount_price' => 0, 'coupon_id'=>0];
        }

        //check if this coupon need logged in
        $needLoggedIn = $couponData->logged;
        if ($needLoggedIn == \Ideas\Shop\Models\Coupon::NEED_LOGGED_IN) {
            if (empty($loggedIn)) {
                return ['rs' => false, 'error'=> $error['need_logged_in'], 'discount_price' => 0, 'coupon_id'=>0];
            }
        }

        //check if this coupon was used over time
        $couponHistory = self::getCouponHistory($couponData->id);
        if ($couponData->num_uses != 0) {//not unlimited
            $numUsed = $couponHistory['num_used'];
            if ($numUsed >= $couponData->num_uses) {
                return ['rs' => false, 'error'=> $error['num_used_over'], 'discount_price' => 0, 'coupon_id'=>0];
            }
        }

        //check if this coupon was used by customer
        if ($couponData->num_per_customer != 0) {
            if (!empty($loggedIn)) {
                $customerId = $loggedIn->id;
                $arrayCustomerId = $couponHistory['array_customer_id'];
                $numCanUsePerCustomerMax = $couponData->num_per_customer;
                if (!empty($arrayCustomerId[$customerId])) {
                    if ($arrayCustomerId[$customerId] >= $numCanUsePerCustomerMax) {
                        return ['rs' => false, 'error'=> $error['num_used_per_customer'],
                            'discount_price' => 0, 'coupon_id'=>0];
                    }
                }
            }
        }

        //get final discount if this coupon is valid
        return self::getFinalDiscount($couponData, $totalPrice, $cart);
    }
}
