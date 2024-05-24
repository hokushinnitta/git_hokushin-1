<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultFontTypeToColorSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            $table->string('default_font_type')->nullable();
        });
    }

    public function down()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            if (Schema::hasColumn('color_settings', 'default_font_type')) {
                $table->dropColumn('default_font_type');
            }
        });
    }
}

