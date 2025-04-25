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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('COD_proyecto')->primary();
            $table->string('titulo_proyecto', 40);
            $table->text('objetivo_proyecto');
            $table->string('orientacion_del_proyecto', 30);
            $table->date('fecha_inicio_proyecto');
            $table->date('fecha_fin_proyecto');

            $table->unsignedBigInteger('COD_tipo_proyecto');
            $table->foreign('COD_tipo_proyecto')
                  ->references('COD_tipo_proyecto')
                  ->on('tipo__proyectos') // Nombre exacto de tu tabla
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
