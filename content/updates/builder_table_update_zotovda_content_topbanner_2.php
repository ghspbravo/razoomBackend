<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentTopbanner2 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_topbanner', function($table)
        {
            $table->string('content', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_topbanner', function($table)
        {
            $table->string('content', 191)->nullable(false)->change();
        });
    }
}
