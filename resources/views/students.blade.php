@vite('resources/css/app.css')

<form action= "{{ url('estudiantes') }}" method="POST">
    @csrf
    <label for="name_student">Nombre:</label>
    <input type="text" name="name_student" id="name_student" required>
    
    <label for="lastame_student">Apellido:</label>
    <input type="text" name="lastame_student" id="lastame_student">
    
    <label for="id_student">ID del Estudiante:</label>
    <input type="number" name="id_student" id="id_student" required>
    
    <label for="birthday">Fecha de Nacimiento:</label>
    <input type="date" name="birthday" id="birthday" required>
    
    <label for="comments">Comentarios:</label>
    <textarea name="comments" id="comments"></textarea>
    
    <button type="submit">Enviar</button>
</form>
