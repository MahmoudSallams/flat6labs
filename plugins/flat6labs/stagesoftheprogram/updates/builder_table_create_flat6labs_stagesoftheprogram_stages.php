<?php namespace Flat6labs\Stagesoftheprogram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFlat6labsStagesoftheprogramStages extends Migration
{
    public function up()
    {
        Schema::create('flat6labs_stagesoftheprogram_stages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('flat6labs_stagesoftheprogram_stages');
    }
}
