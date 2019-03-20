<?php namespace Zotovda\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZotovdaEventsItems extends Migration
{
    public function up()
    {
        Schema::create('zotovda_events_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('place')->nullable();
            $table->string('dates')->nullable();
            $table->string('date_and_place')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zotovda_events_items');
    }
}
