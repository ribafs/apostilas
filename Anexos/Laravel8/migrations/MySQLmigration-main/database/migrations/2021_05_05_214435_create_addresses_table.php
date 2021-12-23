<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->integer('addressId')->autoIncrement();
            $table->integer('addressUserId');
            $table->string('addressName', 64);
            $table->string('addressStreet', 64);
            $table->string('addressNumber', 64);
            $table->string('addressComplement', 64);
            $table->string('addressNeighborhood', 64);
            $table->string('addressCity', 64);
            $table->string('addressUF', 64);
            $table->string('addressPostalCode', 64);
            $table->datetime('addressRegisterDatetime');
            $table->string('addressStatus');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
