<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('color_settings', function (Blueprint $table) {
            $table->id();
            $table->string('background_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('header_color')->nullable();
            $table->string('border_color')->nullable();
            $table->string('button_background_color')->nullable();
            $table->string('button_text_color')->nullable();
            $table->string('button_hover_background_color')->nullable();
            $table->string('button_hover_text_color')->nullable();
            $table->string('footer_color')->nullable();
            $table->string('textbox_color')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('color_settings');
    }
}
