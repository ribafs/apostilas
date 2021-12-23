<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_logs', function (Blueprint $table) {
            $table->integer('logId')->autoIncrement();
            $table->integer('logLicenseId');
            $table->integer('logAdminId');
            $table->string('logType', 55);
            $table->string('logMessage', 1024);
            $table->datetime('logDatetime');
            $table->integer('logStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_logs');
    }
}
