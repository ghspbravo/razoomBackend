<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentItems extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_items', function($table)
        {
            $table->string('logo')->nullable();
            $table->string('socials_vk')->nullable();
            $table->string('socials_fb')->nullable();
            $table->string('socials_in')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_items', function($table)
        {
            $table->dropColumn('logo');
            $table->dropColumn('socials_vk');
            $table->dropColumn('socials_fb');
            $table->dropColumn('socials_in');
        });
    }
}
