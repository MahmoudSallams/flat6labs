<?php  namespace Flat6labs\Trainer\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\trainer\Models\Trainer;


/**
* 
*/
class TrainerItem extends ComponentBase
{
	public $trainer;

	public function componentDetails() {
		return [
			'name' => 'TrainerItem',
			'description' => 'TrainerItem description'
		];

	}

	public function onRun(){

		$this->trainer = $this->LoadTrainer();
	}
	
	public function LoadTrainer(){
		$id = $this->param('id');
		return  trainer::find($id);
	}
	
}

?>