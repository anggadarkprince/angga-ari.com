<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('setting_group_id')->unsigned();
            $table->string('setting');
            $table->text('initial_value');
            $table->timestamps();

            $table->foreign('setting_group_id')->references('id')->on('setting_groups')->onDelete('cascade');
        });

        DB::table('settings')->insert([
            ['setting_group_id' => 1, 'setting' => 'name'],
            ['setting_group_id' => 1, 'setting' => 'description'],
            ['setting_group_id' => 1, 'setting' => 'keywords'],
            ['setting_group_id' => 1, 'setting' => 'author'],
            ['setting_group_id' => 1, 'setting' => 'profile'],
            ['setting_group_id' => 2, 'setting' => 'support'],
            ['setting_group_id' => 2, 'setting' => 'bug'],
            ['setting_group_id' => 3, 'setting' => 'update'],
            ['setting_group_id' => 3, 'setting' => 'offer'],
            ['setting_group_id' => 3, 'setting' => 'login'],
            ['setting_group_id' => 3, 'setting' => 'mobile'],
            ['setting_group_id' => 4, 'setting' => 'contact'],
            ['setting_group_id' => 4, 'setting' => 'email'],
            ['setting_group_id' => 4, 'setting' => 'website'],
            ['setting_group_id' => 4, 'setting' => 'tagline'],
            ['setting_group_id' => 4, 'setting' => 'subtagline'],
            ['setting_group_id' => 4, 'setting' => 'identity'],
            ['setting_group_id' => 4, 'setting' => 'profile'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('settings')->truncate();

        Schema::dropIfExists('settings');
    }
}
