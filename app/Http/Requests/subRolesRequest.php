<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class subRolesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'rol_seleccionado'=>'required','unique',
            'nombre_sub_rol'=>'required',
            'desc_sub_rol'=>'required',

        ];
    }
    public function messages()
    {
        return[
            'desc_sub_rol.required'=>'El campo descripcion rol es requerido',
        ];
    }
}
