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
        Schema::create('professores', function (Blueprint $table) {
            $table->increments('id_professor'); 
            $table->string('nome');
            $table->string('cpf', 14)->unique(); 
            $table->date('nascimento')->nullable();
            $table->string('telefone', 15)->nullable();
            $table->string('formacao')->nullable();
            $table->string('email')->unique(); 
            $table->string('senha'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professores');
    }
};
