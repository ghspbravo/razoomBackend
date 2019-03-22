<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZotovdaContentPages extends Migration
{
    public function up()
    {
        Schema::create('zotovda_content_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('main_about')->nullable();
            $table->string('main_about_title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zotovda_content_pages');
    }
}
