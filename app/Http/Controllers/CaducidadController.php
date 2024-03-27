<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Carbon\Carbon; // Importa la clase Carbon

class CaducidadController extends Controller
{
    public function mostrarAlerta()
    {
        // Obtener productos próximos a caducar (por ejemplo, con una fecha de caducidad dentro de los próximos 7 días)
        $productos = Producto::whereDate('fecha_caducidad', '<=', now()->addDays(7))->get();

        // Mensaje para mostrar en la alerta
        $mensaje = '¡ALERTA! Los siguientes productos están próximos a caducar:';

         // Agregar un producto manualmente (solo para fines de prueba)
        $productoNuevo = new Producto();
        $productoNuevo->nombre = 'Arroz';
        $productoNuevo->fecha_caducidad = Carbon::now()->addDays(3); // Agrega 3 días a la fecha actual
        $productos[] = $productoNuevo;

        return view('alerta', compact('mensaje', 'productos'));
    }
}
