<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('resposta')->nullable(false);
            $table->string('email_inicial',150)->nullable(false);
            $table->string('email_secundario',150)->nullable(false);
            $table->unsignedBigInteger('caso_id');
            $table->foreign('caso_id')->references('id')->on('casos')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('propostas');
    }
}
