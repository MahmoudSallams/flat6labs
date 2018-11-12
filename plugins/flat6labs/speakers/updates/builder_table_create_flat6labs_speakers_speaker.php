<?php namespace Flat6labs\Speakers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFlat6labsSpeakersSpeaker extends Migration
{
    public function up()
    {
        Schema::create('flat6labs_speakers_speaker', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description');
            $table->string('nationality', 255);
            $table->integer('mobile');
            $table->string('mail', 255);
            $table->string('website', 255);
            $table->dateTime('gender');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('flat6labs_speakers_speaker');
    }
}
