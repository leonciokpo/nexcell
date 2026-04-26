<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;

Route::get('/', [pruebaController::class, 'principal'])->name('principal');

Route::get('/quienes-somos', [pruebaController::class, 'quienesSomos'])->name('quienesSomos');

Route::get('/comercializacion', [pruebaController::class, 'comercializacion'])->name('comercializacion');

Route::get('/terminos-y-usos', [pruebaController::class, 'terminosYUsos'])->name('terminosYUsos');

Route::get('/contacto', [pruebaController::class, 'contacto'])->name('contacto');

Route::post('/contacto', [ContactoController::class, 'procesar'])->name('procesar');

Route::get('/exito', [pruebaController::class, 'exito'])->name('exito');

Route::get('/smartphones', [ProductoController::class, 'smartphones'])->name('smartphones');

Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');