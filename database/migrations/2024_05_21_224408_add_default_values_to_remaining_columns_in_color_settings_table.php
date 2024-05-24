<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValuesToRemainingColumnsInColorSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            $table->string('remaining_column_default')->nullable();
        });
    }

    public function down()
    {
        Schema::table('color_settings', function (Blueprint $table) {
            if (Schema::hasColumn('color_settings', 'remaining_column_default')) {
                $table->dropColumn('remaining_column_default');
            }
        });
    }
}
