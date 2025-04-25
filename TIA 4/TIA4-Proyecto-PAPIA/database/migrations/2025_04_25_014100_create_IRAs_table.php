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
        Schema::create('IRAs', function (Blueprint $table) {
            $table->id('COD_IRA')->primary();
            $table->text('descripcion_IRA');
            $table->string('nivel_dominio_IRA', length: 100);

            $table->unsignedBigInteger('COD_ERA');
            $table->foreign('COD_ERA')
                  ->references('COD_ERA')
                  ->on('ERAs') // Nombre exacto de tu tabla
                  ->onDelete('cascade');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('IRAs');
    }
};
