<?php namespace Flat6labs\Speakers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFlat6labsSpeakersSpeaker2 extends Migration
{
    public function up()
    {
        Schema::table('flat6labs_speakers_speaker', function($table)
        {
            $table->string('gender')->change();
        });
    }
    
    public function down()
    {
        Schema::table('flat6labs_speakers_speaker', function($table)
        {
            $table->string('gender', 191)->change();
        });
    }
}
