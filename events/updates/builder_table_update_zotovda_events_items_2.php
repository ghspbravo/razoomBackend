<?php namespace Zotovda\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaEventsItems2 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_events_items', function($table)
        {
            $table->renameColumn('options', 'apply_link');
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_events_items', function($table)
        {
            $table->renameColumn('apply_link', 'options');
        });
    }
}
