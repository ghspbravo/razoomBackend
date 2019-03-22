<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentPages4 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->string('contacts_title')->nullable();
            $table->string('privacy_title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->dropColumn('contacts_title');
            $table->string('privacy_title', 191)->change();
        });
    }
}
