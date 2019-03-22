<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentPages5 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->renameColumn('contacts_adress', 'contacts_address');
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->renameColumn('contacts_address', 'contacts_adress');
        });
    }
}
