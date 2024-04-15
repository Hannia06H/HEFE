<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css\style_inv.css">
    <link rel="stylesheet" href="css\style.css">
    <title>Inventario</title>
</head>

<body>
<header>
        <nav class="navbar navbar-light border-dark bj_font">
            <span class="navbar-brand mb-0 h1 esp">Servicio a Domicilio</span>
        </nav>
    </header>
    <section>
        <div class="p-4 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 15%;">ID</th>
                        <th style="width: 15%;">Nombre</th>
                        <th style="width: 15%;">Cantidad</th>
                        <th style="width: 15%;">Precio Proveedor</th>
                        <th style="width: 15%;">Precio Cliente</th>
                        <th style="width: 15%;">Caducidad</th>
                        <th style="width: 15%;"><a href="/insert" type="button" class="btn btn-secondary">Agregar</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($produc as $producto)
                    <tr>
                        <td class="col">{{$producto->id}}</td>
                        <td class="col">{{$producto->nombre}}</td>
                        <td class="col">{{$producto->cantidad}}</td>
                        <td class="col">{{$producto->precioProv}}</td>
                        <td class="col">{{$producto->precioCliente}}</td>
                        <td class="col">{{$producto->caducidad}}</td>
                        <td class="col">
                            <a href="{{ route('editProduc', ['id' => $producto->id]) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('eliminar.registro', ['id' => $producto->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm mt-1" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <footer>

    </footer>
</body>

</html>
