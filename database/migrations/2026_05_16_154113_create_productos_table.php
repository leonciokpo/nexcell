<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->id();

            $table->string('nombre', 150);

            $table->text('descripcion')->nullable();

            $table->decimal('precio', 10, 2);

            // Precio anterior para mostrar ofertas
            $table->decimal('precio_viejo', 10, 2)->nullable();

            // Porcentaje de descuento
            $table->integer('descuento')->default(0);

            $table->integer('stock')->default(0);

            // Producto nuevo
            $table->boolean('nuevo')->default(false);

            // Producto destacado / más vendido
            $table->boolean('destacado')->default(false);

            $table->foreignId('marca_id')
                  ->constrained('marcas')
                  ->onDelete('cascade');

            $table->foreignId('categoria_id')
                  ->constrained('categorias')
                  ->onDelete('cascade');

            $table->timestamps();
                
            $table->softDeletes()->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};