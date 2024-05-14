<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 10);
            $table->string('password', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

?>


// <?php

// namespace Illuminate\Database\Migrations;

// abstract class Migration
// {
//     /**
//      * The name of the database connection to use.
//      *
//      * @var string|null
//      */
//     protected $connection;

//     /**
//      * Enables, if supported, wrapping the migration within a transaction.
//      *
//      * @var bool
//      */
//     public $withinTransaction = true;

//     /**
//      * Get the migration connection name.
//      *
//      * @return string|null
//      */
//     public function getConnection()
//     {
//         return $this->connection;
//     }
// }
