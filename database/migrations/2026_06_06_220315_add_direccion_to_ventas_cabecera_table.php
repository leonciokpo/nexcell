<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ventas_cabecera', function (Blueprint $table) {

            // Dirección de envío
            $table->string('codigo_postal')->nullable();
            $table->string('calle')->nullable();
            $table->string('numero')->nullable();
            $table->string('barrio')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('provincia')->nullable();

            // Pago (SOLO método, no tarjeta)
            $table->string('metodo_pago')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('ventas_cabecera', function (Blueprint $table) {

            $table->dropColumn([
                'codigo_postal',
                'calle',
                'numero',
                'barrio',
                'ciudad',
                'provincia',
                'metodo_pago'
            ]);
        });
    }
};