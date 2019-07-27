<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'email'         =>  'unique:teachers|required',
            'name'          =>  'required',
            'last_name'     =>  'required',
            'cell_phone'    =>  'required',
            'province'    =>  'required',
            'canton'    =>  'required',
            'district'    =>  'required',
        ];
    }
    
    public function messages()
    {
        return [
            'email.unique' => 'El correo ya se encuentra en uso. Por favor seleccione uno diferente',
            'email.required' => 'Debe indicar el correo electrónico del profesor',
            'name.required' => 'Debe indicar el nombre del profesor',
            'last_name.required' => 'Debe indicar el apellido del profesor',
            'cell_phone.required' => 'Debe indicar el teléfono celular del profesor. En caso de que no posea celular, por favor indique algún otro número de contacto en este campo',
            'province.required' => 'Debe seleccionar una provincia',
            'canton.required' => 'Debe seleccionar un cantón',
            'district.required' => 'Debe seleccionar un distrito',
        ];
    }
}