<?php namespace Flat6labs\Stagesoftheprogram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFlat6labsStagesoftheprogramStages extends Migration
{
    public function up()
    {
        Schema::table('flat6labs_stagesoftheprogram_stages', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('flat6labs_stagesoftheprogram_stages', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
