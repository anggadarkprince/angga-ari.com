<?php

use Illuminate\Support\Facades\Schema;
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
            $table->id('id');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('parent')->nullable();
            $table->string('name', 100);
            $table->string('email', 50);
            $table->string('contact', 50);
            $table->string('website', 100);
            $table->text('comment');
            $table->text('ip');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('approved');
            $table->integer('commentable_id');
            $table->string('commentable_type');
            $table->softDeletes();
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
        Schema::dropIfExists('comments');
    }
}
