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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->integer('COD_estudiante')->primary();
            $table->string('nombre_1', 20);
            $table->string('apellido_1', 20);
            $table->integer('telefono_1');
            $table->string('correo_electronico', 50);

            $table->string('nombre_2', 20)->nullable();
            $table->string('apellido_2', 20)->nullable();
            $table->integer('telefono_2')->nullable();

            $table->unsignedBigInteger('COD_proyecto');
            $table->foreign('COD_proyecto')
                  ->references('COD_proyecto')
                  ->on('proyectos') // Nombre exacto de tu tabla
                  ->onDelete('cascade');

            $table->unsignedBigInteger('COD_programa');
            $table->foreign('COD_programa')
                  ->references('COD_programa')
                  ->on('programa__academicos') // Nombre exacto de tu tabla
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
