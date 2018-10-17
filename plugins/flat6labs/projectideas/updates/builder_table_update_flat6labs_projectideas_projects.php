<?php namespace Flat6labs\ProjectIdeas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFlat6labsProjectideasProjects extends Migration
{
    public function up()
    {
        Schema::rename('flat6labs_projectideas_', 'flat6labs_projectideas_projects');
    }
    
    public function down()
    {
        Schema::rename('flat6labs_projectideas_projects', 'flat6labs_projectideas_');
    }
}
