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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_ficha');
            $table->string('numero_ue');
            $table->string('coordenadas');
            $table->string('titulo_descripcion');
            $table->string('tipo_estructura');
            $table->string('descripcion');
            $table->string('dimensiones');
            $table->string('otros_comentarios');
            $table->string('diagrama_estratificado');
            $table->string('relaciones_fisicas');
            $table->string('fiabilidad_estratificada');
            $table->string('estado_conservacion');
            $table->string('interpretacion_discusion');
            $table->string('muestras');
            $table->string('muros_asociado');
            $table->string('planos');
            $table->string('otros_dibujos');
            $table->string('fotografias');
            $table->string('ubicacion_diagrama');
            $table->string('plataforma');
            $table->string('periodo_fase');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};
