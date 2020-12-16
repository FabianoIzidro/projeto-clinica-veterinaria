<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaAnimais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomeAnimal');
            $table->string('responsavel');
            $table->date('DataNascimento');
            $table->date('DataVacina');
            $table->string('cor');
            $table->decimal('altura', 3,2);
            $table->decimal('peso', 4,2);
            $table->boolean('sexo');
            $table->boolean('especie');
            $table->boolean('raca');
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
        Schema::dropIfExists('animais');
    }
}
