<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->integer('transactionId')->autoIncrement();
            $table->integer('transactionUserId');
            $table->integer('transactionAdminId');
            $table->decimal('transactionValue', 15,2);
            $table->string('transactionDescription', 55);
            $table->datetime('transactionDatetime');
            $table->integer('transactionStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
