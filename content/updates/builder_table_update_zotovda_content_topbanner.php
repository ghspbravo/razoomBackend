<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentTopbanner extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_topbanner', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('content')->change();
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_topbanner', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('content', 191)->change();
            $table->string('image', 191);
        });
    }
}
