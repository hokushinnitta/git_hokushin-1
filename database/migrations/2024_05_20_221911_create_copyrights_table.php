<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyrightsTable extends Migration
{
    public function up()
    {
        Schema::create('copyrights', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('copyrights');
    }
}
