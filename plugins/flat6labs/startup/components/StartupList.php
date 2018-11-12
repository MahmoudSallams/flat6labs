<?php  namespace Flat6labs\Startup\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Startup\Models\Startup;


/**
* 
*/
class StartupList extends ComponentBase
{
	public $startup;

	public function componentDetails() {
		return [
			'name' => 'StartupList',
			'description' => 'StartupList description'
		];

	}

	public function onRun(){

		$this->startup = $this->LoadStartup();
	}
	
	public function LoadStartup(){

		return  startup::all();
	}
	
}

?>