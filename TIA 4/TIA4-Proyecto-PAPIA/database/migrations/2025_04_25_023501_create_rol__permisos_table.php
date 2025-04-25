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
        Schema::create('rol__permisos', function (Blueprint $table) {
             // Usar el mismo tipo de dato que en las tablas originales
             $table->unsignedBigInteger('COD_rol');
             $table->unsignedBigInteger('COD_permiso');
             
             // Definir las claves foráneas especificando exactamente las tablas y columnas
             $table->foreign('COD_rol')
                   ->references('COD_rol')
                   ->on('rols') // Nombre exacto de tu tabla
                   ->onDelete('cascade');
                   
             $table->foreign('COD_permiso')
                   ->references('COD_permiso')
                   ->on('permisos') // Nombre exacto de tu tabla  
                   ->onDelete('cascade');
                   
             // Clave primaria compuesta
             $table->primary(['COD_rol', 'COD_permiso']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol__permisos');
    }
};
