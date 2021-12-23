<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->integer('storeId')->autoIncrement(); #cuidar sempre se tiver 2x ;;
            $table->integer('storeLicenseId');
            $table->integer('storeAdminId'); #sempre que tiver Id no final de um integer tem que usar o unsigned para futuras relações
            $table->string('storeName', 64);
            $table->string('storeCity', 255);
            $table->decimal('storeDeliveryValue', 15,5); #decimal só se usa virgula
            $table->string('storePhone', 45);
            $table->text('storeAddress');
            $table->decimal('storeLatitude', 10,8);
            $table->decimal('storeLongitude', 11,8); #não mexe to vendo a onde ta o erro
            $table->string('storeFilename', 45);
            $table->integer('storeOnline')->default(1);
            $table->text('storeOpeningHours');
            $table->datetime('storeRegisterDatetime');
            $table->integer('storeStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
