<?php namespace Flat6labs\Trainer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFlat6labsTrainerTrainer extends Migration
{
    public function up()
    {
        Schema::table('flat6labs_trainer_trainer', function($table)
        {
            $table->string('gender', 255);
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('flat6labs_trainer_trainer', function($table)
        {
            $table->dropColumn('gender');
            $table->increments('id')->unsigned()->change();
        });
    }
}
