<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareerRequest extends FormRequest
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
            'career_name'   =>  'required|unique:careers',
            'career_level'  =>  'required',
            'career_modality'  =>  'required',
            'career_duration'  =>  'required',
        ];
    }
    
    public function messages()
    {
        return [
            'career_name.required' => 'Debe indicar el nombre de la Carrera',
            'career_name.unique' => 'Ya existe una carrera con ese nombre',
            'career_level.required' => 'Debe indicar el nivel de la Carrera',
            'career_modality.required' => 'Debe indicar la modalidad de la Carrera',
            'career_duration.required' => 'Debe indicar la duración de la Carrera',
        ];
    }
}