<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZotovdaContentFooterLogos extends Migration
{
    public function up()
    {
        Schema::create('zotovda_content_footer_logos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('logo_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zotovda_content_footer_logos');
    }
}
