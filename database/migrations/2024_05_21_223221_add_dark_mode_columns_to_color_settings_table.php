<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDarkModeColumnsToColorSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            $table->string('dark_background_color')->nullable();
            $table->string('dark_text_color')->nullable();
            $table->string('dark_header_color')->nullable();
            $table->string('dark_border_color')->nullable();
            $table->string('dark_button_background_color')->nullable();
            $table->string('dark_button_text_color')->nullable();
            $table->string('dark_button_hover_background_color')->nullable();
            $table->string('dark_button_hover_text_color')->nullable();
            $table->string('dark_footer_color')->nullable();
            $table->string('dark_textbox_color')->nullable();
        });
    }

    public function down()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            if (Schema::hasColumn('color_settings', 'dark_background_color')) {
                $table->dropColumn('dark_background_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_text_color')) {
                $table->dropColumn('dark_text_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_header_color')) {
                $table->dropColumn('dark_header_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_border_color')) {
                $table->dropColumn('dark_border_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_button_background_color')) {
                $table->dropColumn('dark_button_background_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_button_text_color')) {
                $table->dropColumn('dark_button_text_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_button_hover_background_color')) {
                $table->dropColumn('dark_button_hover_background_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_button_hover_text_color')) {
                $table->dropColumn('dark_button_hover_text_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_footer_color')) {
                $table->dropColumn('dark_footer_color');
            }
            if (Schema::hasColumn('color_settings', 'dark_textbox_color')) {
                $table->dropColumn('dark_textbox_color');
            }
        });
    }
}
