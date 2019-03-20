<?php namespace Zotovda\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaNewsItems extends Migration
{
    public function up()
    {
        Schema::table('zotovda_news_items', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
            $table->dropColumn('date');
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_news_items', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
            $table->dateTime('date');
        });
    }
}
