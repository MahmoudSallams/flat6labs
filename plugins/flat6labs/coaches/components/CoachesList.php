<?php  namespace Flat6labs\Coaches\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Coaches\Models\Coache;


/**
* 
*/
class CoachesList extends ComponentBase
{
	public $coaches;

	public function componentDetails() {
		return [
			'name' => 'CoachesList',
			'description' => 'CoachesList description'
		];

	}

	public function onRun(){

		$this->coaches = $this->LoadCoaches();
	}
	
	public function LoadCoaches(){

		return  coache::all();
	}
	
}

?>