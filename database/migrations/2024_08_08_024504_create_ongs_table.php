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
        Schema::create('ongs', function (Blueprint $table) {
            $table->increments('id_ong');
            $table->string('nome');
            $table->string('cnpj', 18)->nullable();
            $table->string('responsavel')->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('Endereco')->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('cidade')->nullable();
            $table->string('complemento')->nullable();
            $table->string('Telefone', 15)->nullable();
            $table->text('linkdoacao')->nullable();
            $table->text('sobre')->nullable();
            $table->string('email')->nullable();
            $table->string('senha')->nullable();
            $table->unsignedInteger('id_voluntario')->nullable();
            $table->unsignedInteger('id_curso')->nullable();
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongs');
    }
};
