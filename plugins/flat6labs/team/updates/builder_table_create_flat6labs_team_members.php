<?php namespace Flat6labs\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFlat6labsTeamMembers extends Migration
{
    public function up()
    {
        Schema::create('flat6labs_team_members', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('flat6labs_team_members');
    }
}
