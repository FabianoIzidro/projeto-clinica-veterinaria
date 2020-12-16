<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('facebook')->nullable();
            $table->date('DataNascimento');
            $table->biginteger('telefone');
            $table->biginteger('CPF');
            $table->biginteger('RG');
            $table->boolean('sexo');
            $table->string('rua');
            $table->integer('numero');
            $table->biginteger('CEP');
            $table->boolean('cidade');
            $table->boolean('bairro');
            $table->boolean('estado');
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
        Schema::dropIfExists('clientes');
    }
}
