<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pruebaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\RegistroSesionController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MiPerfilController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ComprobanteController;

/*
|--------------------------------------------------------------------------
| RUTAS SOLO PARA LOS CLIENTES
|--------------------------------------------------------------------------
*/

Route::middleware('rol:noadmin')->group(function () {

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

    Route::get('/productos', [ProductoController::class, 'productos'])->name('productos');

    Route::get('/productos/filtro', [ProductoController::class, 'filtrar'])->name('filtrar');

});
/*
|--------------------------------------------------------------------------
| AUTENTICACION
|--------------------------------------------------------------------------
*/

Route::get('/inicioSesion', [pruebaController::class, 'inicioSesion'])->name('inicioSesion');

Route::post('/inicioSesion', [InicioSesionController::class, 'login'])->name('login.procesar');

Route::get('/registroSesion', [pruebaController::class, 'registroSesion'])->name('registroSesion');

Route::post('/registroSesion', [RegistroSesionController::class, 'signup'])->name('signup.procesar');

Route::post('/logout', function () {

    Auth::logout();

    session()->invalidate();

    session()->regenerateToken();

    return redirect()->route('principal');

})->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('admin')->prefix('admin')->group(function () {

    Route::get('/', function () {
    return view('backend.admin.dashboard');})->name('admin.dashboard');

    // Consultas
    Route::get('/consultas', [ContactoController::class, 'index']);

    Route::patch(
        '/consultas/{id}/estado',
        [ContactoController::class, 'toggleLeido']
    );
    
    // Productos
    Route::get('/productos', [ProductoController::class, 'adminIndex']);
    
    Route::get('/productos/agregar',[ProductoController::class, 'adminAgregarProducto']);

    Route::post('/productos', [ProductoController::class, 'adminStore']);
    
    Route::get('/productos/{id}/editar',[ProductoController::class, 'adminEditar']);

    Route::put('/productos/{id}',[ProductoController::class, 'adminUpdate']);

    Route::patch('/productos/{id}/estado',[ProductoController::class, 'adminDesactivarProducto']);

    // Usuarios
    Route::get('/usuarios', [UsuarioController::class, 'index']);

    Route::post('/usuarios/{id}/rol', [UsuarioController::class, 'cambiarRol']);

    Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);

    // Categorias
    Route::get('/categorias', [CategoriaController::class, 'index']);

    Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');

    // Marcas
    Route::post('/marcas', [MarcaController::class, 'store']);

    //Ventas
    Route::get('/ventas', function () {

        $ventas = \App\Models\VentaCabecera::with('usuario')
            ->where('estado', 'confirmado')
            ->latest()
            ->get();

        return view('backend.admin.vistaVentas', compact('ventas'));

    })->name('admin.ventas');

    Route::get('/ventas/{id}', function ($id) {

        $venta = \App\Models\VentaCabecera::with([
            'usuario',
            'detalles.producto'
        ])->findOrFail($id);

        return view('backend.admin.detalleVenta', compact('venta'));

    })->name('admin.ventas.detalle');
});

Route::get('/auth/google', [GoogleController::class, 'redirect'])
    ->name('google.login');

Route::get('/auth/google/callback', [GoogleController::class, 'callback']);

Route::middleware(['rol:cliente'])->group(function (){
    // Agregar un producto 
    Route::post('/carrito/agregar', [CarritoController::class, 'agregar']) 
                                   ->name('carrito.agregar'); 
    // Eliminar un producto 
    Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar'); 
    // Confirmar la compra 
   Route::post('/carrito/confirmar', [CarritoController::class, 'confirmar'])
    ->name('carrito.confirmar');
     // Vista de compra confirmada (protegida: redirige si no hay sesión) 
    Route::get('/compra-confirmada', function () {

        $carrito = \App\Models\VentaCabecera::where('usuario_id', auth()->id())
            ->where('estado', 'carrito')
            ->first();

        if (!$carrito || $carrito->detalles()->count() === 0) {
            return redirect()->route('principal');
        }

        return view('backend.usuarios.confirmarCompra', compact('carrito'));

    })->name('compra.confirmada');

    Route::get('/mis-compras', [CarritoController::class, 'historial'])
    ->name('compras.historial');

    Route::get('/mis-compras/{id}', [CarritoController::class, 'detalle'])
    ->name('compras.detalle');

    
});


Route::middleware('auth')->group(function () {

    Route::get('/mi-perfil', [MiPerfilController::class, 'index'])
        ->name('mi-perfil');

    Route::put('/mi-perfil', [MiPerfilController::class, 'update'])
        ->name('mi-perfil.update');

});

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');

Route::get('/compra/{id}/comprobante', [ComprobanteController::class, 'comprobante'])
    ->name('backend.usuarios.comprobante');