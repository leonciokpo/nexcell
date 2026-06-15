<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VentaCabecera;
use App\Models\VentaDetalle;
use App\Models\Usuario;
use PDF;

class ComprobanteController extends Controller
{
    public function comprobante($id)
    {
        $compra = VentaCabecera::findOrFail($id);

        $usuario = Usuario::find($compra->usuario_id);

        $detalles = VentaDetalle::where('venta_id', $id)->get();

        $pdf = PDF::loadView('backend.usuarios.comprobante', [
            'compra' => $compra,
            'usuario' => $usuario,
            'detalles' => $detalles
        ]);

        return $pdf->download('comprobante-'.$id.'.pdf');
    }
}