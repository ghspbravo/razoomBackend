<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZotovdaContentFactoids extends Migration
{
    public function up()
    {
        Schema::create('zotovda_content_factoids', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('number');
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zotovda_content_factoids');
    }
}
