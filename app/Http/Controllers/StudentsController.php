<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentsRequest;
use App\Models\Student;

 // Asegúrate de tener esta clase de solicitud para la validación.

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    
    }
    public function index()
    {
        // Si deseas pasar datos a la vista, asegúrate de que estén disponibles. Si no, simplemente muestra la vista.
        return view('students');
    }

    public function store(StudentsRequest $request)
    {
        // Usar el modelo Student para crear un nuevo registro en la base de datos
        Student::create([
            'name_student' => $request->name_student,
            'lastame_student' => $request->lastame_student,
            'id_student' => $request->id_student,
            'birthday' => $request->birthday,
            'comments' => $request->comments,
        ]);

        // Redireccionar a la página deseada después de guardar, por ejemplo, a la lista de estudiantes
        return redirect()->route('tablaE.index')->with('success', 'Estudiante creado con éxito.');
    }
}
