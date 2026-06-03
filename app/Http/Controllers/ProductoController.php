<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Http\Requests\EditarProductoRequest;
use App\Http\Requests\AgregarProductoRequest;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;

class ProductoController extends Controller
{
    use SoftDeletes;
    public function show($id)
    {
        $producto = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])->findOrFail($id);

        return view('frontend.productos.producto', compact('producto'));
    }

    public function productos(Request $request)
    {
        $query = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])->where('destacado', 1);

        // FILTRO CATEGORÍAS
        if ($request->filled('categorias')) {
            $query->whereHas('categoria', function ($q) use ($request) {
                $q->whereIn('nombre', $request->categorias);
            });
        }

        // FILTRO MARCAS
        if ($request->filled('marcas')) {
            $query->whereHas('marca', function ($q) use ($request) {
                $q->whereIn('nombre', $request->marcas);
            });
        }

        // FILTRO PRECIO MIN
        if ($request->filled('min')) {
            $query->where('precio', '>=', $request->min);
        }

        // FILTRO PRECIO MAX
        if ($request->filled('max')) {
            $query->where('precio', '<=', $request->max);
        }

        $productos = $query->get();

        return view('frontend.productos.productos', compact('productos'));
    }

    public function principal()
    {
        $productos = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])->get();

        // Productos más vendidos
        $masVendidosIds = [1, 2, 3, 4, 5, 8, 18, 20];

        $masVendidos = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])
        ->whereIn('id', $masVendidosIds)
        ->get();

        // Productos con descuento
        $ofertas = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])
        ->where('descuento', '>', 0)
        ->get();

        return view('frontend.principal', compact(
            'productos',
            'masVendidos',
            'ofertas'
        ));
    }
    public function filtrar(Request $request)
    {
        $query = Producto::with(['marca', 'categoria', 'imagenes']);

        if ($request->filled('categorias')) {
            $query->whereHas('categoria', function ($q) use ($request) {
                $q->whereIn('nombre', (array) $request->categorias);
            });
        }

        if ($request->filled('marcas')) {
            $query->whereHas('marca', function ($q) use ($request) {
                $q->whereIn('nombre', (array) $request->marcas);
            });
        }

        if ($request->min) {
            $query->where('precio', '>=', $request->min);
        }

        if ($request->max) {
            $query->where('precio', '<=', $request->max);
        }

        // ORDENAMIENTO
        if ($request->sort == 'default') {
            $query->where('destacado', 1);
        }
        elseif ($request->sort == 'asc') {
            $query->orderBy('precio', 'asc');
        }
        elseif ($request->sort == 'desc') {
            $query->orderBy('precio', 'desc');
        }

        $productos = $query->get();

        return view('frontend.productos.partials.grid', compact('productos'));
    }

    public function adminIndex(Request $request)
    {
        $buscar = $request->buscar;

        $productos = Producto::withTrashed()
            ->with([
                'marca',
                'categoria',
                'imagenes'
            ])
            ->when($buscar, function ($query) use ($buscar) {

                $query->where(function ($q) use ($buscar) {

                    $q->where('nombre', 'like', "%{$buscar}%")
                    ->orWhere('precio', 'like', "%{$buscar}%")
                    ->orWhereHas('marca', function ($marca) use ($buscar) {

                        $marca->where('nombre', 'like', "%{$buscar}%");

                    })
                    ->orWhereHas('categoria', function ($categoria) use ($buscar) {

                        $categoria->where('nombre', 'like', "%{$buscar}%");

                    });

                });

            })
            ->get();

        return view(
            'backend.admin.vistaProductos',
            compact('productos')
        );
    }

    public function adminEditar($id)
    {
        $producto = Producto::findOrFail($id);

        $marcas = Marca::all();

        $categorias = Categoria::all();

        return view(
            'backend.admin.editarProducto',
            compact(
                'producto',
                'marcas',
                'categorias'
            )
        );
    }
    public function adminUpdate(EditarProductoRequest $request, $id)
    {
        $producto = Producto::with('imagenes')->findOrFail($id);

        // ACTUALIZAR PRODUCTO
        $producto->update([

            'nombre' => $request->nombre,

            'descripcion' => $request->descripcion,

            'precio' => $request->precio,

            'descuento' => $request->descuento,

            'stock' => $request->stock,

            'destacado' => $request->destacado,

            'marca_id' => $request->marca_id,

            'categoria_id' => $request->categoria_id,
        ]);

        // SI SUBIO NUEVA IMAGEN
        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time() . '.' . $archivo->extension();

            $archivo->move(
                public_path('images/productos'),
                $nombreImagen
            );

            $ruta = 'images/productos/' . $nombreImagen;

            // ACTUALIZA LA PRIMERA IMAGEN
            if ($producto->imagenes->first()) {

                $producto->imagenes->first()->update([
                    'ruta' => $ruta
                ]);
            }
        }

        return redirect('/admin/productos')
            ->with(
                'success',
                'Producto actualizado correctamente'
            );
    }

    public function adminDesactivarProducto($id)
    {
        $producto = Producto::withTrashed()
            ->findOrFail($id);

        if ($producto->trashed()) {

            $producto->restore();

        } else {

            $producto->delete();
        }

        return redirect('/admin/productos')
            ->with(
                'success',
                'Estado del producto actualizado'
            );
    }

    public function adminAgregarProducto()
    {
        $marcas = Marca::all();

        $categorias = Categoria::all();

        return view(
            'backend.admin.agregarProducto',
            compact('marcas', 'categorias')
        );
    }

    public function adminStore(AgregarProductoRequest $request)
    {
        // CREAR PRODUCTO
        $producto = Producto::create([

            'nombre' => $request->nombre,

            'descripcion' => $request->descripcion,

            'precio' => $request->precio,

            'descuento' => $request->descuento ?? 0,

            'stock' => $request->stock,

            'destacado' => $request->destacado,

            'marca_id' => $request->marca_id,

            'categoria_id' => $request->categoria_id,
        ]);

        // SUBIR IMAGEN
        if ($request->hasFile('imagen')) {

            $archivo = $request->file('imagen');

            $nombreImagen = time() . '.' . $archivo->extension();

            $archivo->move(
                public_path('images/productos'),
                $nombreImagen
            );

            $ruta = 'images/productos/' . $nombreImagen;

            // CREAR IMAGEN RELACIONADA
            $producto->imagenes()->create([
                'ruta' => $ruta
            ]);
        }

        return redirect('/admin/productos')
            ->with(
                'success',
                'Producto creado correctamente'
            );
    }
}