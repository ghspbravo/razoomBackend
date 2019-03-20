<?php namespace Zotovda\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaNewsItems2 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_news_items', function($table)
        {
            $table->time('excerpt')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_news_items', function($table)
        {
            $table->dropColumn('excerpt');
        });
    }
}
