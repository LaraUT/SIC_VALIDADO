<form action="{{ route('estudiantes.update', $tabla->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input name="student_name" value="{{$student -> name_student}}"/>
    @error('name_student')
    {{$message}}
    @enderror
    <button type="submit">Editar</button>
</form>
