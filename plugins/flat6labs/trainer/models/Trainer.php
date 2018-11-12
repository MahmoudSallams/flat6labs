<?php namespace Flat6labs\Trainer\Models;

use Model;

/**
 * Model
 */
class Trainer extends Model
{
    
    
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name','description','nationality','gender'];

    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'flat6labs_trainer_trainer';
     public $attachOne = [
        'avatar'=> 'System\Models\File'
    ];
    
}
