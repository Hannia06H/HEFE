<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_inv.css">
    <title>Ventas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #CA3110; /* Rojo */
            color: #fff;
            padding: 10px;
        }
        #ventas {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #CA3110; /* Rojo */
            color: #fff;
        }
        #total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Papagani</h1>
    </header>
    <div id="ventas">
        <h2 id="ventas">Ventas</h2>
        <form action="{{ route('buscarProd') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="producto">Nombre</label>
                <input type="text" class="form-control" id="producto" name="producto" placeholder="Producto">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning btn-sm">Buscar</button>
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @isset($producto)
                    @foreach ($producto as $producto)
                        <tr>
                            <td class="col">{{$producto->id}}</td>
                            <td class="col">{{$producto->nombre}}</td>
                            <td class="col">{{$producto->precioCliente}}</td>
                            <td class="col">{{$producto->cantidad}}</td>
                            <td class="col">
                            </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</body>
</html>
