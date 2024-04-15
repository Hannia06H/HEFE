<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .navbar-custom {
      background-color: #CA3110; /* Color de fondo */
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-nav .nav-link {
      color: #FEFEFE; /* Color del texto */
    }

    .navbar-custom .navbar-brand:hover,
    .navbar-custom .navbar-nav .nav-link:hover {
      color: #ffffff; /* Color del texto al pasar el mouse */
    }
    
    /* Estilo para el botón */
    .btn-custom {
      background-color: #CA3110;
      color: #FEFEFE;
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
    }

    .btn-custom:hover {
      background-color: #8C1B00;
    }

    /* Estilos para el formulario */
    #formulario {
      margin-top: 50px;
      text-align: center;
    }

    #formulario form {
      max-width: 400px;
      margin: 0 auto;
    }

    #formulario input[type="text"] {
      width: 100%;
      margin-bottom: 15px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    #formulario button[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
    }

    #formulario button[type="submit"]:hover {
      background-color: #8C1B00;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="http://127.0.0.1:8000/proveedores">Catálogo de Proveedores</a>
    <a class="navbar-brand" href="http://127.0.0.1:8000/personal">Personal</a>
</nav>

<div class="container mt-4">
    <h4 class="text-center">Registro de Personal</h4>
</div>

<section id="formulario">
    <form method="post" action="{{ route('crear_personal') }}">
        <input name="nombre" type="text" placeholder="Nombre" class="form-control">
        <label>Hora de Entrada:</label><br>
        <input name="entrada" type="time" class="form-control">
        <label>Hora de Salida:</label><br>
        <input name="salida" type="time" class="form-control"><br>
        <h6>Dias de trabajo</h6>
        <input type="checkbox" id="lunes" name="dias[]" value="Lunes">
        <label for="lunes">Lunes</label>
        <input type="checkbox" id="martes" name="dias[]" value="Martes">
        <label for="martes">Martes</label>
        <input type="checkbox" id="miercoles" name="dias[]" value="Miércoles">
        <label for="miercoles">Miércoles</label><br>
        <input type="checkbox" id="jueves" name="dias[]" value="Jueves">
        <label for="jueves">Jueves</label>
        <input type="checkbox" id="viernes" name="dias[]" value="Viernes">
        <label for="viernes">Viernes</label><br>
        <input type="checkbox" id="sabado" name="dias[]" value="Sabado">
        <label for="sabado">Sabado</label>
        <input type="checkbox" id="domingo" name="dias[]" value="Domingo">
        <label for="domingo">Domingo</label>
        <input name="contacto" type="text" placeholder="Contacto" class="form-control">
        <input name="direccion" type="text" placeholder="Direccion" class="form-control">
        @csrf
        <button type="submit" class="btn btn-custom"><a style="color: #FEFEFE;">Guardar</a></button>        
    </form>
    <form action="{{ route('lista_personal') }}">
        <div>
            <br>
            <button type="submit" class="btn btn-custom"><a style="color: #FEFEFE;">Regresar</a></button>
        </div>
    </form>
    
</section>

<!-- Bootstrap JS y dependencias -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
