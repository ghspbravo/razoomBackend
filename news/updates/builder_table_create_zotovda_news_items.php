<?php namespace Zotovda\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZotovdaNewsItems extends Migration
{
    public function up()
    {
        Schema::create('zotovda_news_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->dateTime('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zotovda_news_items');
    }
}
