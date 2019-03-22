<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZotovdaContentReviews extends Migration
{
    public function up()
    {
        Schema::create('zotovda_content_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zotovda_content_reviews');
    }
}
