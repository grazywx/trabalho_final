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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('genero');
            $table->date('data_nascimento');
            $table->string('endereco');
            $table->date('data_consulta');
            $table->string('descricao');
            $table->string('diagnostico');
            $table->string('precricao');
            $table->string('medico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};
