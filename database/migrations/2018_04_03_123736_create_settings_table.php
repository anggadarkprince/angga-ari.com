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
            $table->string('key');
            $table->text('value');
            $table->string('module');
            $table->timestamps();
            $table->primary('key');
        });

        DB::table('settings')->insert([
            ['module' => 'application', 'key' => 'app_name', 'value' => 'Angga Web Blog'],
            ['module' => 'application', 'key' => 'app_desc', 'value' => 'Personal website and blog'],
            ['module' => 'application', 'key' => 'app_keywords', 'value' => 'application, personal, blog, online, profile, showcase, portfolio, internet, angga, ari, wijaya'],
            ['module' => 'application', 'key' => 'theme', 'value' => 'magniva'],
            ['module' => 'application', 'key' => 'default_profile', 'value' => ''],
            ['module' => 'contact', 'key' => 'email_support', 'value' => 'angga.aw92@gmail.com'],
            ['module' => 'contact', 'key' => 'contact_phone', 'value' => '+6285655479868'],
            ['module' => 'social', 'key' => 'facebook', 'value' => 'https://facebook.com/anggadarkprince'],
            ['module' => 'social', 'key' => 'twitter', 'value' => 'https://twitter.com/anggadarkprince'],
            ['module' => 'social', 'key' => 'google', 'value' => 'https://plus.google.com/+AnggaAriWijaya'],
            ['module' => 'social', 'key' => 'instagram', 'value' => 'https://instagram.com/anggadarkprince'],
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
