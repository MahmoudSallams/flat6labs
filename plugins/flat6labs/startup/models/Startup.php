<?php namespace Flat6labs\Startup\Models;

use Model;

/**
 * Model
 */
class Startup extends Model
{


    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name','descripion','status','industry'];

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
    public $table = 'flat6labs_startup_startup';
     public $attachOne = [
        'avatar'=> 'System\Models\File'
    ];
}
