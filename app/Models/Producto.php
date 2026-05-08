<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Producto extends Model 
{ 
    protected $fillable = [
    'nombre',
    'descripcion',
    'precio',
    'stock',
    'imagen1',
    'imagen2',
    'imagen3'
    ];
 
    protected $casts = [ 
    'precio' => 'decimal:2', 
    'stock' => 'integer', 
    ]; 
} 