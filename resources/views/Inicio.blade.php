<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8; /* Color de fondo más claro */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Cambiamos la dirección principal del contenedor a columna */
            align-items: center; /* Centramos horizontalmente el contenido */
            min-height: 100vh; /* Aseguramos que la página ocupe al menos el 100% de la altura de la ventana */
            transition: margin-left 0.5s;
            position: relative; /* Para que el área de activación esté posicionada correctamente */
        }

        header {
            background-color: #2ecc71; /* Verde */
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%; /* Ancho completo */
            margin-bottom: 20px; /* Espacio debajo del encabezado */
        }

        nav {
            background-color: #3498db; /* Azul */
            padding-top: 20px; /* Espacio para el título */
            text-align: center;
            width: 250px; /* Ancho del navbar expandido */
            position: fixed;
            left: -250px; /* Ocultamos el navbar fuera del margen izquierdo */
            top: 0;
            bottom: 0;
            transition: left 0.5s ease, box-shadow 0.5s ease; /* Agregamos la transición de la posición y la sombra */
            overflow-y: auto; /* Permite desplazamiento vertical si el contenido es demasiado largo */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Distribuye uniformemente los elementos */
            box-shadow: -5px 0 15px rgba(0,0,0,0.3); /* Agregamos la sombra al navbar */
            z-index: 2; /* Aseguramos que el navbar esté por encima del contenido */
            height: 100vh; /* Ajustamos la altura del navbar para que ocupe toda la altura de la ventana */
        }

        .nav-title {
            color: #ffffff; /* Blanco */
            font-size: 20px; /* Tamaño del texto del título */
            font-weight: bold; /* Negrita para el título */
        }

        nav a {
            color: #ffffff; /* Blanco */
            text-decoration: none;
            display: block;
            padding: 10px 0; /* Añadimos relleno vertical */
            transition: background-color 0.3s; /* Agregamos transición para el cambio de color de fondo */
        }

        nav a:hover {
            background-color: #299cb94d; /* Azul más oscuro */
            color: #ffffff; /* Blanco */
        }

        .nav-hover-area {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 20px; /* Ancho del área de activación */
            background: transparent;
            z-index: 3; /* Aseguramos que el área de activación esté por encima del contenido y del navbar */
        }

        .nav-hover-area:hover + nav, nav:hover {
            left: 0; /* Mostramos el navbar al pasar el ratón sobre el área de activación */
        }

        main {
            padding: 20px;
            width: 100%; /* Ancho completo */
            max-width: 1200px; /* Establecemos un ancho máximo para el contenido */
            display: flex;
            flex-direction: column;
            align-items: center; /* Centramos horizontalmente el contenido */
            z-index: 1; /* Aseguramos que el contenido esté detrás del navbar */
        }

        .card-container {
            display: flex;
            flex-direction: row; /* Alineamos las tarjetas horizontalmente */
            justify-content: center; /* Centramos horizontalmente las tarjetas */
            gap: 20px; /* Espacio entre las tarjetas */
            flex-wrap: wrap; /* Permitimos el ajuste automático de las tarjetas en varias líneas */
            margin-top: 60px; /* Espacio sobre las tarjetas para evitar que se superpongan con el navbar */
        }

        .card {
            background-color: #ffffff; /* Fondo blanco */
            color: #333333; /* Gris oscuro */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Sombra */
            padding: 20px;
            width: 300px;
            min-height: 200px;
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Distribuye el contenido verticalmente */
        }

        .card h2 {
            margin-top: 0; /* Elimina el margen superior del encabezado */
        }

        .card p {
            flex-grow: 1; /* Permite que el párrafo ocupe el espacio disponible */
        }

        .card:hover {
            transform: translateY(-5px); /* Efecto de elevación al pasar el ratón */
        }

        footer {
            background-color: #2ecc71; /* Verde */
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%; /* Ancho completo */
            margin-top: auto; /* El pie de página se adhiere al fondo */
            z-index: 0; /* Aseguramos que el pie de página esté detrás del contenido */
            position: fixed; /* Fijamos el footer en la parte inferior */
            bottom: 0; /* Lo colocamos al fondo */
            left: 0; /* Lo alineamos a la izquierda */
        }

        /* Nuevo estilo para el contenedor del usuario en el navbar */
        .user-container {
            background-color: transparent; /* Fondo transparente */
            padding: 20px;
            border-bottom: 2px solid #ffffff; /* Borde blanco en la parte inferior */
        }

        .background-image {
            background-image: url('ruta/a/la/imagen-de-fondo.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Ajustamos la imagen de fondo para que cubra todo el contenedor */
            background-position: center; /* Centramos la imagen de fondo */
            height: 100%; /* Ajustamos la altura */
            position: absolute; /* Posicionamos absolutamente para cubrir todo el contenedor */
            width: 100%; /* Ajustamos el ancho */
            top: 0; /* Alineamos arriba */
            left: 0; /* Alineamos a la izquierda */
            z-index: -1; /* Colocamos detrás del contenido */
        }

        .user-avatar {
            width: 100px; /* Ancho del círculo de la imagen del usuario */
            height: 100px; /* Altura del círculo de la imagen del usuario */
            border-radius: 50%; /* Forma de círculo */
            background-color: #ffffff; /* Fondo blanco */
            margin: 0 auto 20px; /* Margen inferior para separar del texto */
            overflow: hidden; /* Ocultamos cualquier parte de la imagen que se salga del círculo */
        }

        .user-info {
            color: #ffffff; /* Texto blanco */
            font-size: 14px; /* Tamaño del texto */
            text-align: center; /* Centramos horizontalmente el texto */
        }
    </style>
</head>
<body>
    <header>
        <h1>@yield('titulo')</h1>
    </header>
    
    <div class="nav-hover-area"></div> <!-- Área de activación del navbar -->
    <nav>
        <div class="background-image"></div> <!-- Contenedor de la imagen de fondo -->
        <div class="user-container">
            <div class="user-avatar">
                <!-- Aquí puedes insertar la imagen del usuario -->
            </div>
            <div class="user-info">
                <h1>ejemplo@gmail.com</h1>
                <h1>Nombre Apellido</h1>
            </div>
        </div>
        <div class="nav-title">Menú</div>
        <a href="{{ route('alumnos') }}">Alumnos</a>       
        <a href="#">Calificaciones</a>
        <a href="#">Perfil</a>
    </nav>

    <main>
        <div class="card-container">
            <div class="card">
                <h2>Información de Calificaciones</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>

            <div class="card">
                <h2>Información de Alumnos</h2>
                <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
            </div>

            <div class="card">
                <h2>Información de Otras Asignaturas</h2>
                <p>Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
        </div>
    </main>

    <footer>
        Sistema Integral de Calificaciones - Derechos reservados
    </footer>
</body>
</html>
