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
            <span class="navbar-brand mb-0 h1 esp">Servicio a provicilio</span>
        </nav>
    </header>
    <section>
        <div class="p-4 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 15%;">Empresa</th>
                        <th style="width: 15%;">Correo</th>
                        <th style="width: 15%;">Telefono</th>
                        <th style="width: 30%;">Referencia y provicilio</th>
                        <th style="width: 15%;"><a href="/servprov" type="button" class="btn btn-secondary">Agregar</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($prov as $prov)
                    <tr>
                        <td class="col">{{$prov->id}}</td>
                        <td class="col">{{$prov->empresa}}</td>
                        <td class="col">{{$prov->correo}}</td>
                        <td class="col">{{$prov->telefono}}</td>
                        <td class="col"><p>{{$prov->referencia}}</p></td>
                        <td class="col">
                            <a href="{{ route('editprov', ['id' => $prov->id]) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('eliminar.provicilio', ['id' => $prov->id]) }}" method="post">
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
