<?php  namespace Flat6labs\Projectideas\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Projectideas\Models\Project;


/**
* 
*/
class ProjectList extends ComponentBase
{
	public $projects;

	public function componentDetails() {
		return [
			'name' => 'ProjectList',
			'description' => 'ProjectList description'
		];

	}

	public function onRun(){

		$this->projects = $this->LoadProject();
	}
	
	public function LoadProject(){

		return  project::all();
	}
	
}

?>