<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Estilo para la barra de navegación */
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

    /* Estilo para la tabla */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Estilo para el botón */
    .btn-custom {
      background-color: #CA3110;
      color: #FEFEFE;
      border: none;
      width: 100%;
      padding: 10px;
      border-radius: 5px;
    }

    .btn-custom:hover {
      background-color: #8C1B00;
      color: #FEFEFE;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="http://127.0.0.1:8000/proveedores">Catálogo de Proveedores</a>
    <a class="navbar-brand" href="http://127.0.0.1:8000/personal">Personal</a>
</nav>

<div class="container mt-4">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Hora de Entrada</th>
        <th>Hora de Salida</th>
        <th>Dias de Trabajo</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <!-- Aquí se iteran los proveedores -->
      @foreach($personal as $register)    
        <tr>
          <td>{{$register->idPersonal}}</td>  
          <td>{{$register->nombre}}</td>
          <td>{{$register->entrada}}</td>
          <td>{{$register->salida}}</td>
          <td>
            @if ($register->dias_semana)
                @foreach (json_decode($register->dias_semana) as $dia)
                    {{ $dia }},
                @endforeach
            @else
                No especificado
            @endif
          </td>
          <td>
            <a href="{{ route('editar_personal', ['id' => $register->idPersonal]) }}"><i class="fas fa-edit"></i></a>
          </td>
          <td>
          <a href="{{ route('mostrar_personal', ['id' => $register->idPersonal]) }}"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <!-- Botón con estilo personalizado -->
  <form action="{{ route('registrar_personal') }}">
    <div>
        <button type="submit" class="btn btn-custom"><a style="color: #FEFEFE;">Agregar Trabajador</a></button>
      </div>
  </form>
    
</div>

<!-- Bootstrap JS y dependencias -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
