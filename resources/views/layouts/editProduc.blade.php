<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css\style_inv.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Tienda</title>
</head>
<body>
<header>
        <nav class="navbar navbar-light border-dark bj_font">
            <span class="navbar-brand mb-0 h1 esp">Servicio a Domicilio</span>
        </nav>
    </header>
    <section>
        <div class="container_form start-50 mt-4 mx-auto ">
        <h1 class="text-center p-3">Editar Producto </h1>
        <form action="{{ route('modProduc', ['id' => $produc->first()->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" value="{{ $produc->first()->nombre }}" name="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Cantidad</label>
                <input type="text" id="cantidad" value="{{ $produc->first()->cantidad }}" name="cantidad" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Precio Proveedor</label>
                <input type="text" id="precioProv" value="{{ $produc->first()->precioProv }}" name="precioProv" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Precio Cliente</label>
                <input type="text" id="precioCliente" value="{{ $produc->first()->precioCliente }}" name="precioCliente" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Caducidad</label>
                <input type="text" id="caducidad" value="{{ $produc->first()->caducidad }}" name="caducidad" class="form-control">
            </div>
        </div>

        <div class="modal-footer">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </form>
</div>

    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
