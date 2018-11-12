<?php  namespace Flat6labs\Speakers\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Speakers\Models\Speaker;


/**
* 
*/
class SpeakersItem extends ComponentBase
{
	public $speakers;

	public function componentDetails() {
		return [
			'name' => 'SpeakersItem',
			'description' => 'SpeakersItem description'
		];

	}

	public function onRun(){

		$this->speakers = $this->LoadSpeakers();
	}
	
	public function LoadSpeakers(){
		$id = $this->param('id');
		return  speaker::find($id);
	}
	
}

?>