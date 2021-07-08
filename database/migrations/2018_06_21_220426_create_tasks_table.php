<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('type', ['todo', 'routine'])->default('todo');
            $table->string('day')->nullable();
            $table->date('date')->nullable();
            $table->unsignedTinyInteger('hour')->nullable();
            $table->unsignedTinyInteger('minute')->nullable();
            $table->integer('remind_before')->default(0);
            $table->enum('priority', ['low', 'normal', 'high'])->default('normal');
            $table->enum('status', ['listed', 'on progress', 'done'])->default('listed');
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
        Schema::dropIfExists('tasks');
    }
}
