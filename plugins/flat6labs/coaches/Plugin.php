<?php namespace Flat6labs\Coaches;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Flat6labs\Coaches\Components\CoachesList' => 'CoachesList',
            'Flat6labs\Coaches\Components\CoachesItem' => 'CoachesItem',
        ];
    }

    public function registerSettings()
    {
    }
}
