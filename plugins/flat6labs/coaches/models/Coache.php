<?php namespace Flat6labs\Coaches\Models;

use Model;

/**
 * Model
 */
class Coache extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name','description','nationality','gender'];
    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'flat6labs_coaches_coache';
     public $attachOne = [
        'avatar'=> 'System\Models\File'
    ];
    
    
}
