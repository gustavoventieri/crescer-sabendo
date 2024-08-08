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
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id_professor');
            $table->string('nome');
            $table->string('CPF', 14);
            $table->date('Nascimento')->nullable();
            $table->string('Telefone', 15)->nullable();
            $table->string('formacao')->nullable();
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
        Schema::dropIfExists('professors');
    }
};
