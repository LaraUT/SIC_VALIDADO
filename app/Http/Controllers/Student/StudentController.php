<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentsRequest;   
class StudentController extends Controller
{
    //
    public function index(){
        //este metodo va a mostrar la pantalla principal 
        return view('students');
    }

//Sobreescribimos el metodo "tienda"
public function store( StudentRequest $request ){
    return "formulario procesado";
    }
}