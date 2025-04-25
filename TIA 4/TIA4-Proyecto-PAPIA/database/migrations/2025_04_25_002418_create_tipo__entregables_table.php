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
        Schema::create('tipo__entregables', function (Blueprint $table) {
            $table->id('COD_tipo_entregable')->primary();
            $table->string('nombre_tipo_entregable', length: 100);
            $table->text('descripcion_tipo_entregable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo__entregables');
    }
};
