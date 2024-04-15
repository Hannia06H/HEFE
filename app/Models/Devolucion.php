<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    protected $table = 'devoluciones'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre_producto',
        'tipo_producto',
        'precio',
        'fecha_venta',
        'fecha_devolucion',
        'motivo',
    ];

    // Aquí puedes definir relaciones si es necesario
}
