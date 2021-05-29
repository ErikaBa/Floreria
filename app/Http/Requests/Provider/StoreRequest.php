<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name'=>'required|string|max:255',
            'email'=>'required|string',
            'rfc'=>'required|string',
            'address'=>'nullable|string',
            'phone'=>'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 50 caracteres.',
            
            'email.required'=>'El valor no es correcto.',
            'email.string'=>'El valor no es correcto.',

            'rfc.required'=>'El valor no es correcto.',
            'rfc.string'=>'El valor no es correcto.',

            'address.string'=>'El valor no es correcto.',

            'phone.required'=>'El valor no es correcto.',
            'phone.string'=>'El valor no es correcto.',
        ];
}
}