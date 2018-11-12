<?php namespace Flat6labs\Coaches\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFlat6labsCoachesCoache extends Migration
{
    public function up()
    {
        Schema::table('flat6labs_coaches_coache', function($table)
        {
            $table->string('name', 255);
            $table->text('description');
            $table->string('nationality', 255);
            $table->integer('mobile');
            $table->string('mail', 255);
            $table->string('website', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('gender', 255);
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('flat6labs_coaches_coache', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('nationality');
            $table->dropColumn('mobile');
            $table->dropColumn('mail');
            $table->dropColumn('website');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->dropColumn('gender');
            $table->increments('id')->unsigned()->change();
        });
    }
}
