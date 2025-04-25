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
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id('COD_asignatura')->primary();
            $table->string('nombre_asignatura', length: 50);
            $table->string('departamento_asignatura', length: 50);
            $table->string('facultad_asignatura', length: 50);
            $table->integer('creditos_asignatura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaturas');
    }
};
