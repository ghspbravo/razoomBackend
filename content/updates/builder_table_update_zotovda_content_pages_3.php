<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentPages3 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->string('privacy_title')->nullable();
            $table->text('privacy_content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->dropColumn('privacy_title');
            $table->dropColumn('privacy_content');
        });
    }
}
