<?php namespace Flat6labs\Speakers;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Flat6labs\Speakers\Components\SpeakersList' => 'SpeakersList',
            'Flat6labs\Speakers\Components\SpeakersItem' => 'SpeakersItem',
        ];
    }

    public function registerSettings()
    {
    }
}
