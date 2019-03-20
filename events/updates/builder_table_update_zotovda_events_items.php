<?php namespace Zotovda\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaEventsItems extends Migration
{
    public function up()
    {
        Schema::table('zotovda_events_items', function($table)
        {
            $table->string('options')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_events_items', function($table)
        {
            $table->dropColumn('options');
        });
    }
}
