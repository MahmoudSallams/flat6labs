<?php namespace Flat6labs\Trainer;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Flat6labs\Trainer\Components\TrainerList' => 'TrainerList',
                        'Flat6labs\Trainer\Components\TrainerItem' => 'TrainerItem',

        ];
    }

    public function registerSettings()
    {
    }
}
