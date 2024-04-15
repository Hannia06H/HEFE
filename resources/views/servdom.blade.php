<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style_inv.css">
    <link rel="stylesheet" href="css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-light border-dark bj_font">
            <span class="navbar-brand mb-0 h1 esp">Servicio a Domicilio</span>
        </nav>
    </header>
    <article class="art-cent d-flex justify-content-center align-items-center">
        <aside class="cen-form d-flex justify-content-center align-items-center">
        <form  action="{{ route('guardarDom') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label class="control-label col-12">Nombre</label>
                    <div class="col-12"> 
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-12">Apellido</label>
                    <div class="col-12">
                        <input type="text" name="apellido" class="form-control" id="" placeholder="Apellido">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-12">Celular</label>
                    <div class="col-12">
                        <input type="text" name="celular" class="form-control" id="" placeholder="Celular">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-12">Quien recibe?</label>
                    <div class="col-12">
                        <input type="text" name="recibe" class="form-control" id="" placeholder="Quien recibe?">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-12">Fecha de entrega</label>
                    <div class="col-12">
                        <input name="fecha" type="date" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-12">Direccion y referencia</label>
                    <div class="col-12">
                        <textarea name="referencia" id="" cols="50" rows="5"></textarea>
                    </div>
                </div>
                <br>
                <div class="modal-footer">
                <input class="btn btn-primary btn-lg btn-block w-100" type="submit" value="Submit">
            </div>
             </form>
        </aside>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
