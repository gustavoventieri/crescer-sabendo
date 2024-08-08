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
        Schema::create('vaga_voluntarios', function (Blueprint $table) {
            $table->increments('id_vaga');
            $table->string('nomearea')->nullable();
            $table->string('Telefone', 15)->nullable();
            $table->string('email')->nullable();
            $table->string('cidade')->nullable();
            $table->text('sobre')->nullable();
            $table->string('dias')->nullable();
            $table->time('horario')->nullable();
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
        Schema::dropIfExists('vaga_voluntarios');
    }
};
