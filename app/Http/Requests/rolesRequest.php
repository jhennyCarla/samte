<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rolesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre_rol'=>'required|max:50, uniqued',
            'descripcion_rol'=>'required|max:100',

        ];
    }
     public function messages()
    {
        return[
            'descripcion_rol.required'=>'El campo descripcion rol es requerido',
            'nombre_rol.uniqued'=>'El nombre rol ya existe'
        ];
    }
}
