<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('username', 50)->unique();
            $table->string('email', 50)->unique();
            $table->string('password')->nullable();
            $table->string('location', 100)->nullable();
            $table->string('contact', 100)->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('about', 700)->nullable();
            $table->string('avatar', 300)->nullable();
            $table->enum('status', ['pending', 'activated', 'suspended'])->default('pending');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
