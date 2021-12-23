<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->integer('productionId')->autoIncrement();
            $table->integer('productionLicenseId');
            $table->integer('productionAdminId');
            $table->integer('productionStoreId');
            $table->integer('productionProductId');
            $table->integer('productionQuantity');
            $table->date('productionDate');
            $table->integer('productionBalance');
            $table->datetime('productionRegisterDatetime');
            $table->datetime('productionUpdateDatetime');
            $table->integer('productionUpdateAdminId');
            $table->integer('productionStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productions');
    }
}
