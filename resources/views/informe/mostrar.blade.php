<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Devoluciones</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Si tienes un archivo CSS separado -->
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <img src="{{ asset('imagenes/papagani.jpeg') }}" alt="Imagen Izquierda" class="navbar-logo">
            <h1 class="navbar-title">PAPAGIN</h1>
        </div>
        <div class="navbar-right">
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </div>
    
    </div>
    <h1>Informe de Devoluciones</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Producto</th>
                <th>Tipo Producto</th>
                <th>Precio</th>
                <th>Fecha Venta</th>
                <th>Fecha Devolución</th>
                <th>Motivo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devoluciones as $devolucion)
            <tr>
                <td>{{ $devolucion->id }}</td>
                <td>{{ $devolucion->nombre_producto }}</td>
                <td>{{ $devolucion->tipo_producto }}</td>
                <td>{{ $devolucion->precio }}</td>
                <td>{{ $devolucion->fecha_venta }}</td>
                <td>{{ $devolucion->fecha_devolucion }}</td>
                <td>{{ $devolucion->motivo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
