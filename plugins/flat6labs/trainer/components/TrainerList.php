<?php  namespace Flat6labs\Trainer\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Trainer\Models\Trainer;


/**
* 
*/
class TrainerList extends ComponentBase
{
	public $trainer;

	public function componentDetails() {
		return [
			'name' => 'TrainerList',
			'description' => 'TrainerList description'
		];

	}

	public function onRun(){

		$this->trainer = $this->LoadTrainer();
	}
	
	public function LoadTrainer(){

		return  trainer::all();
	}
	
}

?>