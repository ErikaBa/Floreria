<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'string|required|max:255',
        ];
    }
    public function messages()
    {
        return[

            'name.string'=>'El valor no es correcto.',
            'name.required'=>'Este campo es requerido.',
            'name.max'=>'Solo se permite 255 caracteres.',

            
        ];
    }
}