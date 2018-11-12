<?php namespace Flat6labs\Speakers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFlat6labsSpeakersSpeaker extends Migration
{
    public function up()
    {
        Schema::table('flat6labs_speakers_speaker', function($table)
        {
            $table->string('gender')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('flat6labs_speakers_speaker', function($table)
        {
            $table->dateTime('gender')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
