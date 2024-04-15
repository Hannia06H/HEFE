<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Devoluciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #FF0000;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .navbar-title {
            margin: 0;
            font-size: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
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
    <form action="{{ route('agregar.devolucion') }}" method="POST">
        @csrf
        <label for="nombre_producto">Nombre Producto:</label>
        <input type="text" id="nombre_producto" name="nombre_producto" required><br><br>

        <label for="tipo_producto">Tipo de Producto:</label>
        <input type="text" id="tipo_producto" name="tipo_producto" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br><br>

        <label for="fecha_venta">Fecha Venta:</label>
        <input type="date" id="fecha_venta" name="fecha_venta" required><br><br>

        <label for="fecha_devolucion">Fecha Devolución:</label>
        <input type="date" id="fecha_devolucion" name="fecha_devolucion" required><br><br>

        <label for="motivo">Motivo:</label>
        <textarea id="motivo" name="motivo" required></textarea><br><br>

        <button type="submit">Agregar Devolución</button>
    </form>
    <a href="{{ route('informe.dev') }}" style="margin-top: 20px; display: inline-block;">Ver Informe de Devoluciones</a>

</body>
</html>