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
        Schema::create('programa__academico__asignaturas', function (Blueprint $table) {
            // Usar el mismo tipo de dato que en las tablas originales
            $table->unsignedBigInteger('COD_programa');
            $table->unsignedBigInteger('COD_asignatura');
            
            // Definir las claves foráneas especificando exactamente las tablas y columnas
            $table->foreign('COD_programa')
                  ->references('COD_programa')
                  ->on('programa__academicos') // Nombre exacto de tu tabla
                  ->onDelete('cascade');
                  
            $table->foreign('COD_asignatura')
                  ->references('COD_asignatura')
                  ->on('asignaturas') // Nombre exacto de tu tabla
                  ->onDelete('cascade');
                  
            // Clave primaria compuesta
            $table->primary(['COD_programa', 'COD_asignatura']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programa__academico__asignaturas');
    }
};
