<?php  namespace Flat6labs\Team\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Team\Models\Member;


/**
* 
*/
class MembersList extends ComponentBase
{
	public $members;

	public function componentDetails() {
		return [
			'name' => 'Members List',
			'description' => 'memeber detalis description'
		];

	}

	public function onRun(){

		$this->members = $this->LoadMember();
	}
	
	public function LoadMember(){

		return  Member::all();
	}
	
}

?>