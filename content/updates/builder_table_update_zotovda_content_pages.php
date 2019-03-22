<?php namespace Zotovda\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZotovdaContentPages extends Migration
{
    public function up()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->string('home_about_title')->nullable();
            $table->string('home_video_url')->nullable();
            $table->string('home_video_title')->nullable();
            $table->string('home_lead_title')->nullable();
            $table->text('home_lead_content')->nullable();
            $table->string('home_events_title')->nullable();
            $table->string('about_about_title')->nullable();
            $table->text('about_about_content')->nullable();
            $table->string('about_team_title')->nullable();
            $table->string('about_review_title')->nullable();
            $table->string('about_write_review_link')->nullable();
            $table->string('fond_title')->nullable();
            $table->string('fond_content')->nullable();
            $table->string('events_title')->nullable();
            $table->text('events_content')->nullable();
            $table->string('news_title')->nullable();
            $table->string('contacts_map')->nullable();
            $table->string('contacts_adress')->nullable();
            $table->string('contacts_mail')->nullable();
            $table->text('contacts_phone')->nullable();
            $table->string('contacts_fb')->nullable();
            $table->string('contacts_vk')->nullable();
            $table->string('contacts_in')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->renameColumn('main_about', 'home_about');
            $table->dropColumn('main_about_title');
        });
    }
    
    public function down()
    {
        Schema::table('zotovda_content_pages', function($table)
        {
            $table->dropColumn('home_about_title');
            $table->dropColumn('home_video_url');
            $table->dropColumn('home_video_title');
            $table->dropColumn('home_lead_title');
            $table->dropColumn('home_lead_content');
            $table->dropColumn('home_events_title');
            $table->dropColumn('about_about_title');
            $table->dropColumn('about_about_content');
            $table->dropColumn('about_team_title');
            $table->dropColumn('about_review_title');
            $table->dropColumn('about_write_review_link');
            $table->dropColumn('fond_title');
            $table->dropColumn('fond_content');
            $table->dropColumn('events_title');
            $table->dropColumn('events_content');
            $table->dropColumn('news_title');
            $table->dropColumn('contacts_map');
            $table->dropColumn('contacts_adress');
            $table->dropColumn('contacts_mail');
            $table->dropColumn('contacts_phone');
            $table->dropColumn('contacts_fb');
            $table->dropColumn('contacts_vk');
            $table->dropColumn('contacts_in');
            $table->increments('id')->unsigned()->change();
            $table->renameColumn('home_about', 'main_about');
            $table->string('main_about_title', 191)->nullable();
        });
    }
}
