<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void  #quando você roda um php artisan migrate não da pra corrigir a cagada dai tem que apagar a tabela e o migration que ta dentro da tabela migration mais isso não vem ao caso agora a pergunta é por que tu colocou null ? campo null eu perguntei pra alguem onde estava o erro me disse que era o nullabel
     */ #ok mais da onde tu tirou o null ? e na tabela que o cara te mandou manda tu colocar null ? ok .. foi so pq tava dando erro e me orientaram de forma errada
    public function up() 
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('categoryId')->autoIncrement(); #agora arruma ai
            $table->string('categoryName', 64);
            $table->integer('categoryStatus'); #arruma o resto agora
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
