@extends ('plantilla') <!-- extends es para heredar la plantilla -->

@section('contenido')

<form action= "{{url('alumnos')}}" method="POST">
  @csrf
  <input type="text" name= "name_student" placeholder="Nombre">
  <input type="text" name= "id_student" placeholder="Matrícula">
  <input type="email" name= "email_student" placeholder="Correo">
  <input type="password" name= "passord_student" placeholder="Contraseña">
  <button type="submit" >Agregar Estudiante</button>
</form>
@endsection

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
</body>
</html>