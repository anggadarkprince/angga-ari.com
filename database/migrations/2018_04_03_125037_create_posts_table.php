<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id');
            $table->string('slug', 350);
            $table->string('title', 150);
            $table->string('subtitle', 150)->nullable();
            $table->text('content')->nullable();
            $table->text('cover')->nullable();
            $table->enum('status', ['draft', 'published', 'scheduled'])->default('draft');
            $table->enum('privacy', ['private', 'public'])->default('public');
            $table->unsignedInteger('views')->default(0);
            $table->unsignedInteger('comments')->default(0);
            $table->dateTime('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
