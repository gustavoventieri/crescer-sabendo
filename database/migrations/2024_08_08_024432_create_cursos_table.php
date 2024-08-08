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
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id_curso');
            $table->string('nome');
            $table->text('sobre')->nullable();
            $table->time('horario')->nullable();
            $table->string('dias')->nullable();
            $table->unsignedInteger('id_professor')->nullable();
            $table->binary('foto')->nullable();
            $table->text('itens_aula')->nullable();
            $table->foreign('id_professor')->references('id_professor')->on('professores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
