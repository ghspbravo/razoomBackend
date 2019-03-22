<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentItems3 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_items', function($table)
        {
            $table->string('endaument_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_items', function($table)
        {
            $table->dropColumn('endaument_link');
        });
    }
}
