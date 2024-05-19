<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_settings', function (Blueprint $table) {
            $table->id();
            $table->string('mode'); // 'normal' or 'dark'
            $table->string('header_color');
            $table->string('background_color');
            $table->string('font_color');
            $table->string('font_type');
            $table->integer('font_size');
            $table->string('border_color');
            $table->string('button_color');
            $table->string('button_text_color');
            $table->string('input_color');
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
        Schema::dropIfExists('color_settings');
    }
}
