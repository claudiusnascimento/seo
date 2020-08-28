<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {

            $table->id();

            $table->string('rel', 255);
            $table->integer('rel_id')->unsigned();

            /*google*/
            $table->string('title', 255)->nullable();
            $table->text('description', 255)->nullable();
            $table->string('keywords', 255)->nullable();
            $table->string('robots', 255)->nullable();
            $table->text('h1', 255)->nullable();

            /*facebook*/
            $table->string('og_title', 255)->nullable();
            $table->string('og_description', 255)->nullable();
            $table->string('og_type', 255)->nullable();
            $table->string('og_image', 255)->nullable();
            $table->string('og_url', 255)->nullable();
            $table->string('og_sitename', 255)->nullable();
            $table->string('og_fb_admins', 255)->nullable();

            /*twitter*/
            $table->string('twitter_card', 255)->nullable();
            $table->string('twitter_url', 255)->nullable();
            $table->string('twitter_title', 255)->nullable();
            $table->string('twitter_description', 255)->nullable();
            $table->string('twitter_image', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo');
    }
}
