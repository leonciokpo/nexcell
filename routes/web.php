<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebaController;

Route::get('/', [pruebaController::class, 'nexcell']);

Route::get('/quienesSomos', [pruebaController::class, 'quienesSomos']);