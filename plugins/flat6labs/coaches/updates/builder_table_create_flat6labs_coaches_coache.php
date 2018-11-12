<?php namespace Flat6labs\Coaches\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFlat6labsCoachesCoache extends Migration
{
    public function up()
    {
        Schema::create('flat6labs_coaches_coache', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('flat6labs_coaches_coache');
    }
}
