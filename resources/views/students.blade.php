@vite('resources/css/app.css')


<form action= "{{ url('estudiantes') }}" method="POST">
    @csrf
    <label for="name_student">Nombre:</label>
    <input type="text" name="name_student" id="name_student" required>
    <label for="lastname_student">Apellido:</label>
    <input type="text" name="lastname_student" id="lastname_student" required>
    <button type="submit">Enviar</button>
</form>


