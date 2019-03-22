<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZotovdaContentTopbanner extends Migration
{
    public function up()
    {
        Schema::create('zotovda_content_topbanner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('content');
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zotovda_content_topbanner');
    }
}
