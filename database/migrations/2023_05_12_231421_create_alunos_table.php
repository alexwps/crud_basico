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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();

            //campo que precisamos adicionar
            $table->string('nome');
            $table->integer('idade')->nullable(); //pode ser nulo
            $table->string('email')->unique();//restrição de dado unico por tabela
            $table->timestamps();//campo que grava datahora da criação de registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
