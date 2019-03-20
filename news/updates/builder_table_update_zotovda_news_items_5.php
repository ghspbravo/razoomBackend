<?php namespace Zotovda\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaNewsItems5 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_news_items', function($table)
        {
            $table->dropColumn('thumb');
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_news_items', function($table)
        {
            $table->string('thumb', 191);
        });
    }
}
