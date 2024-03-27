<!DOCTYPE html>
<html>
<head>
    <title>stock</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #FF0000; /* Color rojo */
            overflow: hidden;
            display: flex;
            justify-content: space-between; /* Para alinear los elementos a los extremos */
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .navbar-right {
            display: flex;
            align-items: center;
        }

        .navbar-right a {
            color: white;
            text-decoration: none;
            margin-left: 20px; /* Espacio entre los enlaces */
        }

        .navbar-logo {
            width: 40px;
            height: 40px;
            border-radius: 50%; /* Para hacer la imagen circular */
            margin-right: 10px; /* Espacio entre la imagen y los enlaces */
            
        }

        .navbar-notif:hover {
            transform: scale(1.5); /* Aumentar el tamaño al pasar el cursor */
        }

        .navbar-notif {
            width: 30px;
            height: 30px;
            border-radius: 50%; /* Para hacer la imagen circular */
            margin-right: 10px; /* Espacio entre la imagen y los enlaces */
            cursor: pointer; /* Cambiar el cursor al pasar sobre la imagen */
            transition: transform 0.3s ease; /* Transición suave al aplicar transformaciones */
        }

        .alert-box {
            width: 20%;
            margin: 0 auto; /* Centrado horizontal */
            background-color: white; /* Fondo blanco */
            border: 3px solid red; /* Borde rojo */
            padding: 30px;
            text-align: right;
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
            transition: transform 0.3s ease-in-out; /* Transición suave al pasar el cursor */
            color: red; /* Color de texto rojo */
            display: none; /* Inicialmente oculto */
            float: right; /* Posiciona el recuadro a la derecha */
            margin-top: 50px;
        }

        .alert-box:hover {
            transform: scale(1.05);
        }

        .alert {
            font-weight: bold;
            font-size: 20px;
            margin: 0;
            padding: 0;
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
        
        <img src="{{ asset('imagenes/notif.png') }}" alt="Notificacion" class="navbar-notif">
    </div>
</div>
<div class="container">
    <div class="alert-box" id="alertBox">
        @if(isset($mensaje))
            <div class="alert alert-danger">
                <span class="alert">{{ $mensaje }}</span>
                @if($productos->count() > 0)
                    <ul>
                        @foreach($productos as $producto)
                            <li>
                                <h2>{{ $producto->nombre }}</h2>
                                <p>Stock: {{ $producto->stock }}</p>
                                <p>Fecha de caducidad: {{ $producto->fecha_caducidad }}</p>
                            </li>
                        @endforeach
                    </ul>
                @else
                   
                @endif
            </div>
        @endif
    </div>
</div>

    <!-- Aquí va el resto del contenido de tu vista -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Obtén la imagen de notificación
        var notifImage = document.querySelector(".navbar-notif");

        // Función para mostrar la alerta
        function mostrarAlerta() {
            // Muestra la alerta
            var alertBox = document.getElementById("alertBox");
            alertBox.style.display = "block";
        }

        // Función para el efecto de movimiento al hacer clic en la imagen
        function moverImagen() {
            // Obtener la imagen de notificación
            var image = document.querySelector(".navbar-notif");

            // Aplicar la animación
            image.style.animation = "moveUpDown 0.5s alternate infinite"; // 0.5s para la duración de la animación
        }

        // Agregar eventos al hacer clic en la imagen
        notifImage.addEventListener("click", function () {
            mostrarAlerta(); // Mostrar la alerta
            moverImagen(); // Aplicar el efecto de movimiento
        });

        // Detener la animación cuando se quite el cursor de la imagen
        notifImage.addEventListener("animationend", function () {
            // Obtener la imagen de notificación
            var image = document.querySelector(".navbar-notif");

            // Detener la animación
            image.style.animation = "";
        });
    });
</script>

</body>
</html>
