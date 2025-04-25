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
        Schema::create('proyecto__docentes', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_proyecto');
            $table->unsignedBigInteger('COD_docente');
            
            // Definir las claves foráneas especificando exactamente las tablas y columnas
            $table->foreign('COD_proyecto')
                  ->references('COD_proyecto')
                  ->on('proyectos') // Nombre exacto de tu tabla
                  ->onDelete('cascade');
                  
            $table->foreign('COD_docente')
                  ->references('COD_docente')
                  ->on('docentes') // Nombre exacto de tu tabla  
                  ->onDelete('cascade');
                  
            // Clave primaria compuesta
            $table->primary(['COD_proyecto', 'COD_docente']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto__docentes');
    }
};
