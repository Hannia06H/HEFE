<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devolucion;

class InformeDevolucionesController extends Controller
{
    public function index()
    {
        return view('informe.devoluciones');
    }

    public function agregar(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre_producto' => 'required|string',
            'tipo_producto' => 'required|string',
            'precio' => 'required|numeric',
            'fecha_venta' => 'required|date',
            'fecha_devolucion' => 'required|date',
            'motivo' => 'required|string',
        ]);

        // Crear nueva devolución
        Devolucion::create([
            'nombre_producto' => $request->nombre_producto,
            'tipo_producto' => $request->tipo_producto,
            'precio' => $request->precio,
            'fecha_venta' => $request->fecha_venta,
            'fecha_devolucion' => $request->fecha_devolucion,
            'motivo' => $request->motivo,
        ]);

        return redirect()->back()->with('success', 'Devolución agregada correctamente.');
    }
    public function mostrarInforme()
    {
        $devoluciones = Devolucion::all();
        return view('informe.mostrar', ['devoluciones' => $devoluciones]);
    }
}
