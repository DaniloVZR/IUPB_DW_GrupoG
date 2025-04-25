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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('COD_usuario')->primary();
            $table->string('nombre_usuario', 20);
            $table->string('clave_usuario', 20);
            $table->string('correo_electronico', 30)->nullable();


            $table->unsignedBigInteger('COD_rol');
            $table->foreign('COD_rol')
                  ->references('COD_rol')
                  ->on('rols') // Nombre exacto de tu tabla
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
