<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\style_inv.css">
    <title>Tienda</title>
</head>
<body>
<header>
        <nav class="navbar navbar-light border-dark bj_font">
            <span class="navbar-brand mb-0 h1 esp">Inventario</span>
        </nav>
    </header>
    <section>
    <div class="container_form start-50 mt-4 mx-auto ">
        <h1 class="text-center p-1">Insertar Producto </h1>
        <form action="{{ route('guardar') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" id="cantidad" name="cantidad" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="precioProv" class="form-label">Precio Proveedor</label>
                    <input type="text" id="precioProv" name="precioProv" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="precioCliente" class="form-label">Precio Cliente</label>
                    <input type="text" id="precioCliente" name="precioCliente" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Caducidad</label>
                    <input type="date" id="fecha" name="fecha" class="form-control">
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
</body>
</html>
