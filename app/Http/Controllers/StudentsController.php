<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentsRequest; // Asegúrate de tener esta clase de solicitud para la validación.

class StudentsController extends Controller
{
    public function index()
    {
        // Si deseas pasar datos a la vista, asegúrate de que estén disponibles. Si no, simplemente muestra la vista.
        return view('students');
    }

    public function store(StudentsRequest $request)
    {
        // No necesitas interactuar con la base de datos, simplemente devolver un mensaje.
        return "formulario procesado";
    }
}
