<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('responsavels', function (Blueprint $table) {
            $table->increments('id_responsavel');
            $table->string('nome');
            $table->string('CPF', 11);
            $table->date('Nascimento')->nullable();
            $table->string('Telefone', 15)->nullable();
            $table->string('Endereco')->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('cidade')->nullable();
            $table->string('complemento')->nullable();
            $table->string('email')->nullable();
            $table->string('senha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsavels');
    }
};
