<?php  namespace Flat6labs\Startup\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Startup\Models\Startup;


/**
* 
*/
class StartupItem extends ComponentBase
{
	public $startup;

	public function componentDetails() {
		return [
			'name' => 'StartupItem',
			'description' => 'StartupItem description'
		];

	}

	public function onRun(){

		$this->startup = $this->LoadStartup();
	}
	
	public function LoadStartup(){
		$id = $this->param('id');
		return  startup::find($id);
	}
	
}

?>