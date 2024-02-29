<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Define las reglas de validación aquí
            'name_student' => 'required|string|max:255', //el nombre es obligatorio y es una cadena de texto
            'lastame_student' => 'nullable|string|max:255', // El apellido puede ser nulo, pero si se proporciona, debe ser una cadena de texto
            'id_student' => 'required|integer|unique:students,id_student', // El ID del estudiante debe ser único en la tabla de estudiantes
            'birthday' => 'required|date', // La fecha de nacimiento es obligatoria y debe ser una fecha válida
            'comments' => 'nullable|string', // Los comentarios pueden ser nulos, pero si se proporcionan, deben ser una cadena de texto
        ];
    }
}
