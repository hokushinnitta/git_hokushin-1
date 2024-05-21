<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValuesToRemainingColumnsInColorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            $table->string('header_color')->default('#ffffff')->change();
            $table->string('background_color')->default('#000000')->change();
            $table->string('font_color')->default('#000000')->change();
            $table->string('border_color')->default('#000000')->change();
            $table->string('button_color')->default('#000000')->change();
            $table->string('button_text_color')->default('#ffffff')->change();
            $table->string('input_color')->default('#000000')->change();
            $table->string('dark_header_color')->default('#000000')->change();
            $table->string('dark_background_color')->default('#ffffff')->change();
            $table->string('dark_font_color')->default('#ffffff')->change();
            $table->string('dark_border_color')->default('#ffffff')->change();
            $table->string('dark_button_color')->default('#ffffff')->change();
            $table->string('dark_button_text_color')->default('#000000')->change();
            $table->string('dark_input_color')->default('#ffffff')->change();
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
            $table->string('header_color')->default(null)->change();
            $table->string('background_color')->default(null)->change();
            $table->string('font_color')->default(null)->change();
            $table->string('border_color')->default(null)->change();
            $table->string('button_color')->default(null)->change();
            $table->string('button_text_color')->default(null)->change();
            $table->string('input_color')->default(null)->change();
            $table->string('dark_header_color')->default(null)->change();
            $table->string('dark_background_color')->default(null)->change();
            $table->string('dark_font_color')->default(null)->change();
            $table->string('dark_border_color')->default(null)->change();
            $table->string('dark_button_color')->default(null)->change();
            $table->string('dark_button_text_color')->default(null)->change();
            $table->string('dark_input_color')->default(null)->change();
        });
    }
}
