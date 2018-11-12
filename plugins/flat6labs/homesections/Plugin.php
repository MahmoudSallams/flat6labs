<?php

namespace Flat6labs\HomeSections;

use System\Classes\PluginBase;
use Backend;
use Event;

class Plugin extends PluginBase {

    public function registerComponents() {
        
    }

    public function registerSettings() {
        
    }

    public function registerNavigation() {
        return [
            'homesections' => [
                'label' => 'Site Sections',
                'url' => Backend::url('flat6labs/homesections/navigator'),
                'icon' => 'icon-sitemap',
                'order' => 0,
                'permissions' => ['*'],
                'sideMenu' => [
                    'Project Ideas' => [
                        'label' => 'Project Ideas',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('flat6labs/projectideas/projects'),
                        'permissions' => ['*'],
                    ],
                    'Start Up' => [
                        'label' => 'Start Up',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('flat6labs/startup/startups'),
                        'permissions' => ['*'],
                    ],
                    'Trainer' => [
                        'label' => 'Trainer',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('flat6labs/trainer/trainers'),
                        'permissions' => ['*'],
                    ],
                    'Coaches' => [
                        'label' => 'Coaches',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('flat6labs/coaches/coaches'),
                        'permissions' => ['*'],
                    ],
                     'Speakers' => [
                        'label' => 'Speakers',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('flat6labs/speakers/speakers'),
                        'permissions' => ['*'],
                    ],
                ]
            ]
        ];
    }

    private function backendMenuExtendItems() {
        Event::listen("backend.menu.extendItems", function ($manager) {
//            dump($manager->loadItems());
//            exit();
            foreach ($manager->listMainMenuItems() as $mainMenuCode => $options) {
                $codeArray = explode(".", $mainMenuCode);
                if ($codeArray[0] != "FLAT6LABS") {
                    continue;
                }
                $owner = $codeArray[0] . "." . $codeArray[1];
                $code = $codeArray[2];
                if ($codeArray[1] != 'HOMESECTIONS') {
                    $manager->removeMainMenuItem($owner, $code);
                } else {
                    $manager->addSideMenuItems($owner, $code, [
                        'options' => [
                            'label' => 'STAGES',
                            'icon' => 'icon-gears',
                            'url' => Backend::url('flat6labs/stagesoftheprogram/stages'),
                            'order' => 1,
                        ]
                    ]);
                }
            }
            $context = $manager->getContext();
//            dump(strtolower($context->owner));
//            dump();
            if (strpos(strtolower($context->owner), "flat6labs") !== false) {
                $manager->setContext('Flat6labs.HomeSections', 'homesections', 'options');
            }
            //  dump($manager->listMainMenuItems());
//            $manager->setContextMainMenu('main-menu-project');
        });
    }

    public function boot() {
        $this->backendMenuExtendItems();
    }

}
