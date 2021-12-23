<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('productId')->autoIncrement();
            $table->integer('productCategoryId');
            $table->string('productName', 64);
            $table->string('productSize', 64);
            $table->decimal('productPrice', 15,2);
            $table->text('productDescription');
            $table->string('productFilename', 256);
            $table->datetime('productRegisterDatetime');
            $table->integer('productAvailability');
            $table->integer('productStatus');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
