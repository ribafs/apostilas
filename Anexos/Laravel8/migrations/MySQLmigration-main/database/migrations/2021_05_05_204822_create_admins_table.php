<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('adminId')->autoIncrement();
            $table->string('adminName', 64);
            $table->string('adminDocument', 64);
            $table->string('adminEmail', 64);
            $table->string('adminHashcode', 255);
            $table->integer('adminAccess');
            $table->integer('adminLicenseId');
            $table->datetime('adminRegisterDatetime');
            $table->integer('adminStatus');           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
