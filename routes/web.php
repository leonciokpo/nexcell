<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\RegistroSesionController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;

Route::get('/', [ProductoController::class, 'principal'])->name('principal');

Route::get('/quienes-somos', [pruebaController::class, 'quienesSomos'])->name('quienesSomos');

Route::get('/comercializacion', [pruebaController::class, 'comercializacion'])->name('comercializacion');

Route::get('/terminos-y-usos', [pruebaController::class, 'terminosYUsos'])->name('terminosYUsos');

Route::get('/contacto', [pruebaController::class, 'contacto'])->name('contacto');

Route::post('/contacto', [ContactoController::class, 'procesar']);

Route::get('/exito', [pruebaController::class, 'exito'])->name('exito');

Route::get('/smartphones', [ProductoController::class, 'smartphones'])->name('smartphones');

Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');

Route::get('/accesorios', [ProductoController::class, 'accesorios'])->name('accesorios');

Route::get('/ofertas', [ProductoController::class, 'ofertas'])->name('ofertas');

Route::get('/nuevos', [ProductoController::class, 'nuevos'])->name('nuevos');

Route::get('/inicioSesion', [pruebaController::class, 'inicioSesion'])->name('inicioSesion');

Route::post('/inicioSesion', [InicioSesionController::class, 'login'])->name('login.procesar');

Route::get('/registroSesion', [pruebaController::class, 'registroSesion'])->name('registroSesion');

Route::post('/registroSesion', [RegistroSesionController::class, 'signup'])->name('signup.procesar');

Route::post('/categorias', [CategoriaController::class, 'store']);

Route::post('/marcas', [MarcaController::class, 'store']);

Route::middleware('admin')->group(function () {

    Route::get('/admin', function () {
        return view('backend.admin.dashboard');
    });

});

Route::post('/logout', function () {

    session()->flush();

    return redirect()->route('principal');

})->name('logout');

