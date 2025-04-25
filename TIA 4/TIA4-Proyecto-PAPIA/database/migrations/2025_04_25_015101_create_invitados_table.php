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
        Schema::create('invitados', function (Blueprint $table) {
            // Campos obligatorios (NO NULL)
            $table->id('COD_invitado')->primary();
            $table->string('nombre_1', 20);
            $table->string('apellido_1', 20);
            $table->integer('telefono_1');
            $table->string('correo_electronico', 20);
            $table->string('institucion', 50);
            
            // Campos opcionales (NULL permitido)
            $table->string('nombre_2', 20)->nullable();
            $table->string('apellido_2', 20)->nullable();
            $table->integer('telefono_2')->nullable();
            $table->string('departamento', 50)->nullable();
            $table->string('facultad', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitados');
    }
};
