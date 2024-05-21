<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDarkModeColumnsToColorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            $table->string('dark_header_color')->nullable();
            $table->string('dark_background_color')->nullable();
            $table->string('dark_font_color')->nullable();
            $table->string('dark_border_color')->nullable();
            $table->string('dark_button_color')->nullable();
            $table->string('dark_button_text_color')->nullable();
            $table->string('dark_input_color')->nullable();
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
            $table->dropColumn([
                'dark_header_color',
                'dark_background_color',
                'dark_font_color',
                'dark_border_color',
                'dark_button_color',
                'dark_button_text_color',
                'dark_input_color',
            ]);
        });
    }
}
