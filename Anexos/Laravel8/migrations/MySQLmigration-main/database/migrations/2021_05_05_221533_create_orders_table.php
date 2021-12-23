<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('orderId')->autoIncrement();
            $table->integer('orderNumber');
            $table->integer('orderUserId');
            $table->text('orderItems');
            $table->text('orderDiscounts');
            $table->text('orderPayment');
            $table->text('orderDelivery');
            $table->text('orderOptions');
            $table->date('orderDate');
            $table->text('orderDatetimes');
            $table->integer('orderStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
