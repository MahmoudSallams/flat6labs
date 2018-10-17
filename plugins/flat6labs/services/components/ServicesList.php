<?php  namespace Flat6labs\Services\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Services\Models\Service;


/**
* 
*/
class ServicesList extends ComponentBase
{
	public $services;

	public function componentDetails() {
		return [
			'name' => 'services List',
			'description' => 'Service List all'
		];

	}

	public function onRun(){

		$this->services = $this->LoadService();
	}
	
	public function LoadService(){

		return  service::all();
	}
	
}

?>