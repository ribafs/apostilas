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
            $table->integer('userId')->autoIncrement();
            $table->string('userName', 64);
            $table->string('userEmail', 64);
            $table->string('userHashcode', 255);
            $table->string('userDocument', 64);
            $table->string('userPhone', 64);
            $table->datetime('userRegisterDatetime');
            $table->decimal('userBalance', 11);
            $table->string('userRecoveryCode', 32);
            $table->integer('userStatus');

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
