<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultFontSizeToColorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            $table->integer('font_size')->default(12)->change(); // デフォルト値を 12 に設定
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            $table->integer('font_size')->default(null)->change(); // デフォルト値を解除
        });
    }
}
