<?php namespace Flat6labs\Startup\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFlat6labsStartupStartup extends Migration
{
    public function up()
    {
        Schema::create('flat6labs_startup_startup', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->string('industry', 255);
            $table->text('descripion');
            $table->string('status', 255);
            $table->integer('member_numbers');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('flat6labs_startup_startup');
    }
}
