<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentsRequest; 
use App\Models\Student;

class tablaEController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    
    }
    public function index()
    {
        // Si deseas pasar datos a la vista, asegúrate de que estén disponibles. Si no, simplemente muestra la vista.
        $tablaE= Student::paginate(5); 
        return view('tablaE', compact ('tablaE'));
    }
    

    public function store(StudentsRequest $request)
    {
        
        // No necesitas interactuar con la base de datos, simplemente devolver un mensaje.
        return "formulario procesado";
    }
}
