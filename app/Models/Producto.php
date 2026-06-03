<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'nombre',
        'descripcion',
        'precio',
        'precio_viejo',
        'descuento',
        'stock',
        'nuevo',
        'destacado',
        'marca_id',
        'categoria_id',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }

    public function getPrecioFinalAttribute()
    {
        $precioFinal = $this->precio - (
            $this->precio * $this->descuento / 100
        );

        if ($precioFinal < 10000) {
            return round($precioFinal);
        }

        return (floor($precioFinal / 10000) * 10000) - 1;
    }
}