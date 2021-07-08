<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxonomiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxonomies', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('taxonomy_id')->nullable();
            $table->string('term', 100);
            $table->string('slug');
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('taxonomy_id')->references('id')->on('taxonomies')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxonomies');
    }
}
