<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            //aqui se agregan las reglas de validación, usar names de los campos
            'name_student' => 'bail|required|alpha',
            'email_student' => 'bail|required|email',
            'passord_student' => 'bail|required|between:5,10',
        ];
    }
}
