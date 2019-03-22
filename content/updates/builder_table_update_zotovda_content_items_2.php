<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentItems2 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_items', function($table)
        {
            $table->dropColumn('logo');
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_items', function($table)
        {
            $table->string('logo', 191)->nullable();
        });
    }
}
