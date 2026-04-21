<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebaController;

Route::get('/', [pruebaController::class, 'principal'])->name('home');

Route::get('/quienes-somos', [pruebaController::class, 'quienesSomos'])->name('quienesSomos');

Route::get('/comercializacion', [pruebaController::class, 'comercializacion'])->name('comercializacion');

Route::get('/terminos-y-usos', [pruebaController::class, 'terminosYUsos'])->name('terminosYUsos');