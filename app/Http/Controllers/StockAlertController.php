<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class StockAlertController extends Controller
{
    public function mostrarAlertaStock()
    {
        $productos = Producto::where('stock', '<', 10)->get();
        $mensaje = "¡Alerta de stock bajo! Algunos productos están por agotarse.";

        return view('stock', compact('productos', 'mensaje'));
    }

    public function agregarProducto(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'fecha_caducidad' => 'required|date',
        ]);

        // Crear un nuevo producto
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->stock = $request->stock;
        $producto->fecha_caducidad = $request->fecha_caducidad;
        $producto->save();

        // Redirigir a la página donde se muestra la alerta de stock
        return redirect()->route('ruta.mostrar.alerta.stock');
    }
}
