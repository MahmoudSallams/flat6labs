<?php  namespace Flat6labs\Speakers\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Speakers\Models\Speaker;


/**
* 
*/
class SpeakersList extends ComponentBase
{
	public $speakers;

	public function componentDetails() {
		return [
			'name' => 'SpeakersList',
			'description' => 'SpeakersList description'
		];

	}

	public function onRun(){

		$this->speakers = $this->LoadSpeakers();
	}
	
	public function LoadSpeakers(){

		return  speaker::all();
	}
	
}

?>