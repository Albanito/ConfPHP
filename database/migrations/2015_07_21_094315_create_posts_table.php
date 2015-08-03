<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('excerpt', 255);
            $table->text('content');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->string('link_thumbnail', 150);
            $table->string('url_site');
            $table->enum('status', ['published', 'unpublished'])->default('published');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_user_id_foreign');
        });

        Schema::drop('posts');
    }
}
