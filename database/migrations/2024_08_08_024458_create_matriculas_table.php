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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id_matricula');
            $table->string('situacao')->nullable();
            $table->unsignedInteger('id_curso');
            $table->unsignedInteger('RM');
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
            $table->foreign('RM')->references('RM')->on('alunos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
