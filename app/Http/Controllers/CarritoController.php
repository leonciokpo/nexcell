<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VentaCabecera;
use App\Models\Producto;
use App\Models\VentaDetalle;
use App\Http\Requests\ConfirmarCompraRequest;

class CarritoController extends Controller
{
     // Busca el carrito activo o crea uno nuevo vacío 
    private function obtenerCarrito(){
    return VentaCabecera::firstOrCreate(
        [
            'usuario_id' => auth()->id(),
            'estado'     => 'carrito',
        ],
        [
            'total' => 0
        ]
    );
    }

    public function agregar(Request $request){ 
        $request->validate([ 
            'producto_id' => 'required|exists:productos,id', 
            'cantidad'    => 'required|integer|min:1', 
        ]); 
        $producto = Producto::findOrFail($request->producto_id); 
        // Verificar stock antes de agregar 
        if ($producto->stock < $request->cantidad) { 
            return back()->with('error', 'No hay suficiente stock'); 
        } 
        $carrito = $this->obtenerCarrito(); 
        // ¿El producto ya está en el carrito? 
        $item = $carrito->detalles() 
                        ->where('producto_id', $producto->id)->first(); 
        if ($item) { 
            // Si ya existe: suma la cantidad 
            $item->cantidad += $request->cantidad; 
            $item->subtotal  = $item->cantidad * $item->precio_unitario; 
            $item->save(); 
        } else { 
            // Si no existe: crea un nuevo ítem 
            $carrito->detalles()->create([ 
                'producto_id'     => $producto->id, 
                'cantidad'        => $request->cantidad, 
                'precio_unitario' => $producto->precio, 
                'subtotal'        => $producto->precio * $request->cantidad, 
            ]); 
        } 
        $this->recalcularTotal($carrito); 
        return back()->with('success', 'Producto agregado al carrito'); 
    }

    public function eliminar($id)
    { 
        $carrito = $this->obtenerCarrito(); 
        // where('id',$id) evita eliminar ítems de otro carrito 
        $carrito->detalles()->where('id', $id)->delete(); 
        $this->recalcularTotal($carrito); 
        return back()->with('success', 'Producto eliminado');
    } 

    public function confirmar(ConfirmarCompraRequest $request)
    {

        $carrito = $this->obtenerCarrito();

        if ($carrito->detalles()->count() === 0) {
            return back()->with('error', 'Tu carrito está vacío');
        }

        // Guardar venta con datos de checkout
        $carrito->update([
            'estado' => 'confirmado',
            'fecha_venta' => now(),

            'codigo_postal' => $request->codigo_postal,
            'calle' => $request->calle,
            'numero' => $request->numero,
            'barrio' => $request->barrio,
            'ciudad' => $request->ciudad,
            'provincia' => $request->provincia,
            'metodo_pago' => $request->metodo_pago,
        ]);

        $items = $carrito->detalles()->with('producto')->get();
        $total = $carrito->total;

        return redirect()->route('compra.confirmada')
            ->with('items', $items)
            ->with('total', $total);
    }

    private function recalcularTotal(VentaCabecera $carrito)
    { 
        // sum() suma todos los subtotales de los ítems del carrito 
        $total = $carrito->detalles()->sum('subtotal'); 
        $carrito->update(['total' => $total]); 
    }
}