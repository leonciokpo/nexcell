<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebaController;
use App\Http\Controllers\ContactoController;

Route::get('/', [pruebaController::class, 'principal'])->name('home');

Route::get('/quienes-somos', [pruebaController::class, 'quienesSomos'])->name('quienesSomos');

Route::get('/comercializacion', [pruebaController::class, 'comercializacion'])->name('comercializacion');

Route::get('/terminos-y-usos', [pruebaController::class, 'terminosYUsos'])->name('terminosYUsos');

Route::get('/contacto', [pruebaController::class, 'contacto'])->name('contacto');

Route::post('/contacto', [ContactoController::class, 'procesar'])->name('procesar');

Route::get('/exito', [pruebaController::class, 'exito'])->name('exito');