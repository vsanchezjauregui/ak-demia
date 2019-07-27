<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'password'  =>  'min:8|max:30|confirmed|required',
            'email'     =>  'unique:users|required',
            'name'      =>  'required'
        ];
    }
    
    public function messages()
    {
        return [
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'password.max' => 'La contraseña debe tener 30 caracteres como máximo',
            'password.confirmed' => 'La confirmación y la contraseña deben coincidir',
            'email.unique' => 'El correo ya se encuentra en uso. Por favor seleccione uno diferente',
        ];
    }
}