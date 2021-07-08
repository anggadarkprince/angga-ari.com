<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_groups', function (Blueprint $table) {
            $table->id('id');
            $table->string('group');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('setting_groups')->insert([
            ['group' => 'app', 'description' => 'Application setting'],
            ['group' => 'email', 'description' => 'Email setting'],
            ['group' => 'notification', 'description' => 'Notification setting'],
            ['group' => 'showcase', 'description' => 'Showcase setting'],
            ['group' => 'blog', 'description' => 'Blog setting'],
            ['group' => 'drive', 'description' => 'Drive setting'],
            ['group' => 'journal', 'description' => 'Journal setting'],
            ['group' => 'finance', 'description' => 'Finance setting'],
            ['group' => 'vault', 'description' => 'Vault setting'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('setting_groups')->truncate();

        Schema::dropIfExists('setting_groups');
    }
}
