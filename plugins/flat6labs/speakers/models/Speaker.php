<?php namespace Flat6labs\Speakers\Models;

use Model;

/**
 * Model
 */
class Speaker extends Model
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
    public $table = 'flat6labs_speakers_speaker';
    public $attachOne = ['avatar'=> 'System\Models\File'];
    
}
