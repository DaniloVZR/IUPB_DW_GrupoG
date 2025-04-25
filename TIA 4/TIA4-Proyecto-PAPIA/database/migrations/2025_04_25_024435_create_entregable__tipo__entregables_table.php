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
        Schema::create('entregable__tipo__entregables', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_entregable');
            $table->unsignedBigInteger('COD_tipo_entregable');
            
            // Definir las claves foráneas especificando exactamente las tablas y columnas
            $table->foreign('COD_entregable')
                  ->references('COD_entregable')
                  ->on('entregables') // Nombre exacto de tu tabla
                  ->onDelete('cascade');
                  
            $table->foreign('COD_tipo_entregable')
                  ->references('COD_tipo_entregable')
                  ->on('tipo__entregables') // Nombre exacto de tu tabla  
                  ->onDelete('cascade');
                  
            // Clave primaria compuesta
            $table->primary(['COD_entregable', 'COD_tipo_entregable']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregable__tipo__entregables');
    }
};
