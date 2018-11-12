<?php namespace Flat6labs\HomeSections\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Navigator extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Flat6labs.HomeSections', 'homesections', 'options');

    }
    public function index(){
        
    }
}
