<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->integer('licenseId')->autoIncrement(); #interger não tem 11 dai tu não coloca virgula deixa do jeito que está
            $table->string('licenseName', 64);
            $table->string('licenseCompanyName', 64);
            $table->string('licenseCompanyDocument', 64);
            $table->integer('licenseStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licenses');

        
    }
}
