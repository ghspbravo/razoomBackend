<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentPages2 extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->string('contacts_map_x')->nullable();
            $table->string('contacts_map_y')->nullable();
            $table->string('home_about_title')->change();
            $table->string('home_video_url')->change();
            $table->string('home_video_title')->change();
            $table->string('home_lead_title')->change();
            $table->string('home_events_title')->change();
            $table->string('about_about_title')->change();
            $table->string('about_team_title')->change();
            $table->string('about_review_title')->change();
            $table->string('about_write_review_link')->change();
            $table->string('fond_title')->change();
            $table->string('fond_content')->change();
            $table->string('events_title')->change();
            $table->string('news_title')->change();
            $table->string('contacts_adress')->change();
            $table->string('contacts_mail')->change();
            $table->string('contacts_fb')->change();
            $table->string('contacts_vk')->change();
            $table->string('contacts_in')->change();
            $table->dropColumn('contacts_map');
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->dropColumn('contacts_map_x');
            $table->dropColumn('contacts_map_y');
            $table->string('home_about_title', 191)->change();
            $table->string('home_video_url', 191)->change();
            $table->string('home_video_title', 191)->change();
            $table->string('home_lead_title', 191)->change();
            $table->string('home_events_title', 191)->change();
            $table->string('about_about_title', 191)->change();
            $table->string('about_team_title', 191)->change();
            $table->string('about_review_title', 191)->change();
            $table->string('about_write_review_link', 191)->change();
            $table->string('fond_title', 191)->change();
            $table->string('fond_content', 191)->change();
            $table->string('events_title', 191)->change();
            $table->string('news_title', 191)->change();
            $table->string('contacts_adress', 191)->change();
            $table->string('contacts_mail', 191)->change();
            $table->string('contacts_fb', 191)->change();
            $table->string('contacts_vk', 191)->change();
            $table->string('contacts_in', 191)->change();
            $table->string('contacts_map', 191)->nullable();
        });
    }
}
