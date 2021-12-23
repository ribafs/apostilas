<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->nullable(false);
            $table->string('endereco',200)->nullable(false);
            $table->string('cidade',100)->nullable(false);
            $table->string('cep',8)->nullable(false);
            $table->string('uf',2)->nullable(false);
            $table->string('pais',20)->nullable(false);
            $table->string('crm',15)->nullable(false);
            $table->string('email',150)->nullable(false);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('especialidade_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('especialidade_id')->references('id')->on('especialidades')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('pacientes');
    }
}
