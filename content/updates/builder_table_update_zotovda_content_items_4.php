<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentItems4 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_items', function($table)
        {
            $table->string('collaboration_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_items', function($table)
        {
            $table->dropColumn('collaboration_link');
        });
    }
}
