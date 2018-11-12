<?php  namespace Flat6labs\Coaches\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Coaches\Models\Coache;


/**
* 
*/
class CoachesItem extends ComponentBase
{
	public $coaches;

	public function componentDetails() {
		return [
			'name' => 'CoachesItem',
			'description' => 'CoachesItem description'
		];

	}

	public function onRun(){

		$this->coaches = $this->LoadTrainer();
	}
	
	public function LoadCoaches(){
		$id = $this->param('id');
		return  coache::find($id);
	}
	
}

?>