<?php namespace Flat6labs\Team;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
            'Flat6labs\Team\Components\MembersList' => 'memberslist'
        ];
    }

//     public function registerSettings()
//     {
//     	return [
//         'Team\FormWidgets\Memberbox' => [
// 'label' => 'member box field',
// 'code' => 'member box'
//         ]
        

//     ];
//     }




}
