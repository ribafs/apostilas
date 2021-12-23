<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMedicoEspecialidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico_especialidade', function (Blueprint $table) {
            $table->foreignId('medico_id')->constrained()->onDelete('cascade');
            $table->foreignId('especialidade_id')->constrained()->onDelete('cascade');
            $table->primary(['medico_id','especialidade_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medico_especialidade');
    }
}
