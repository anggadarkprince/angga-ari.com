<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('slug', 300);
            $table->string('title', 100);
            $table->string('tagline', 100);
            $table->text('description')->nullable();
            $table->string('cover', 300)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('team', 200)->nullable();
            $table->string('url', 300)->nullable();
            $table->string('layout', 50)->default('default');
            $table->date('date')->nullable();
            $table->enum('privacy', ['private', 'public'])->default('public');
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
        Schema::dropIfExists('portfolios');
    }
}
