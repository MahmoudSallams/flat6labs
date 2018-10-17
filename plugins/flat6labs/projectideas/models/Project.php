<?php namespace Flat6labs\ProjectIdeas\Models;

use Model;

/**
 * Model
 */
class Project extends Model

{

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title','description'];
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
    public $table = 'flat6labs_projectideas_projects';
    public $attachOne = [
        'avatar'=> 'System\Models\File'
    ];
}
