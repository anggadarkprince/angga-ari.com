<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id');
            $table->foreignId('parent')->nullable();
            $table->boolean('is_directory')->default(false);
            $table->text('source')->nullable();
            $table->string('name');
            $table->unsignedBigInteger('size');
            $table->string('mime')->nullable();
            $table->string('caption')->nullable();
            $table->text('description')->nullable();
            $table->integer('attachable_id')->nullable();
            $table->string('attachable_type')->nullable();
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
        Schema::dropIfExists('uploads');
    }
}
