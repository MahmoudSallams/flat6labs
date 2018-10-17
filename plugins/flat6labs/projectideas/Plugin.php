<?php namespace Flat6labs\ProjectIdeas;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
            'Flat6labs\ProjectIdeas\Components\ProjectList' => 'ProjectList',
            'Flat6labs\ProjectIdeas\Components\ProjectItem' => 'ProjectItem',
        ];
    }

    public function registerSettings()
    {
    }
}
