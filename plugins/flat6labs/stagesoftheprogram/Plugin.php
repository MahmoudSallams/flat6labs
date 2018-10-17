<?php namespace Flat6labs\Stagesoftheprogram;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    		return [
            'Flat6labs\Stagesoftheprogram\Components\StagesList' => 'StagesList'
        ];
    }

    public function registerSettings()
    {
    }
}
