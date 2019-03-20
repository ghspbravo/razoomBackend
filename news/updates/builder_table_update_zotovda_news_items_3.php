<?php namespace Zotovda\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaNewsItems3 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_news_items', function($table)
        {
            $table->text('excerpt')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_news_items', function($table)
        {
            $table->time('excerpt')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
