<?php namespace Flat6labs\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFlat6labsServicesServices extends Migration
{
    public function up()
    {
        Schema::rename('flat6labs_services_', 'flat6labs_services_services');
        Schema::table('flat6labs_services_services', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('flat6labs_services_services', 'flat6labs_services_');
        Schema::table('flat6labs_services_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
