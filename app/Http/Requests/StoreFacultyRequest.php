<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFacultyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'faculty_name'  =>  'required|unique:faculties',
        ];
    }
    
    public function messages()
    {
        return [
            'faculty_name.required' => 'Debe indicar el nombre de la Facultad',
            'faculty_name.unique' => 'Ya existe una facultad con ese nombre',
        ];
    }
}