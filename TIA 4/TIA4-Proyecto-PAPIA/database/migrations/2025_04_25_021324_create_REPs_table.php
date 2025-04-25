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
        Schema::create('REPs', function (Blueprint $table) {
            $table->id('COD_REP')->primary();
            $table->string('descripcion', 100);        

            $table->unsignedBigInteger('COD_proyecto');
            $table->foreign('COD_proyecto')
                  ->references('COD_proyecto')
                  ->on('proyectos') // Nombre exacto de tu tabla
                  ->onDelete('cascade');

            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('REPs');
    }
};
