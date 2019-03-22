<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZotovdaContentTeam extends Migration
{
    public function up()
    {
        Schema::create('zotovda_content_team', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('position')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zotovda_content_team');
    }
}
