<?php namespace Flat6labs\Services;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

    	return [
            'Flat6labs\Services\Components\ServicesList' => 'ServicesList'
        ];
    }

    public function registerSettings()
    {
    }
}
