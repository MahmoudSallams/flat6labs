<?php namespace Flat6labs\Startup;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        
    	return [
            'Flat6labs\Startup\Components\StartupList' => 'StartupList'
            ,
            'Flat6labs\Startup\Components\StartupItem' => 'StartupItem',
        ];
    }

    public function registerSettings()
    {
    }
}
