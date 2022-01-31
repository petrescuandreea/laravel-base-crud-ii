<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table -> id();

            $table -> string('name', 30);
            $table -> string('lastname', 30);
            $table -> date('date_of_birth');
            $table -> string('username', 30) -> unique();
            $table -> string('email', 45) -> unique();
            $table -> string('password') -> unique();

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
