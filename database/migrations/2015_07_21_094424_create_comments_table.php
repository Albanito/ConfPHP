<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->text('message');
            $table->enum('status', ['published', 'unpublished'])->default('published');
            $table->enum('spam', ['spam', 'no-spam'])->default('no-spam');
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_post_id_foreign');
        });
        Schema::drop('comments');
    }
}
