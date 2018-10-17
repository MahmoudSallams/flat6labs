<?php  namespace Flat6labs\Projectideas\Components;

use Cms\Classes\ComponentBase;
use Flat6labs\Projectideas\Models\Project;


/**
* 
*/
class ProjectItem extends ComponentBase
{
	public $project;

	public function componentDetails() {
		return [
			'name' => 'ProjectItem',
			'description' => 'ProjectItem description'
		];

	}

	public function onRun(){

		$this->project = $this->LoadProject();
	}
	
	public function LoadProject(){
		$id = $this->param('id');
		return  project::find($id);
	}
	
}

?>