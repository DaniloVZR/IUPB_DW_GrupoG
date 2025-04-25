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
        Schema::create('rol__usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('COD_rol');
            $table->unsignedBigInteger('COD_usuario');
            
            // Definir las claves foráneas especificando exactamente las tablas y columnas
            $table->foreign('COD_rol')
                  ->references('COD_rol')
                  ->on('rols') // Nombre exacto de tu tabla
                  ->onDelete('cascade');
                  
            $table->foreign('COD_usuario')
                  ->references('COD_usuario')
                  ->on('usuarios') // Nombre exacto de tu tabla  
                  ->onDelete('cascade');
                  
            // Clave primaria compuesta
            $table->primary(['COD_rol', 'COD_usuario']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol__usuarios');
    }
};
