<?php  namespace Flat6labs\stagesoftheprogram\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\stagesoftheprogram\Models\Stage;


/**
* 
*/
class StagesList extends ComponentBase
{
	public $stages;

	public function componentDetails() {
		return [
			'name' => 'StagesList',
			'description' => 'StagesList all'
		];

	}

	public function onRun(){

		$this->stages = $this->LoadStage();
	}
	
	public function LoadStage(){

		return  stage::all();
	}
	
}

?>