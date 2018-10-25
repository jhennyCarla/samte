<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Gestiones extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.     *
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
            // 'anio'=>'unique',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date|after:fecha_inicio',
            'plan'=>'required',
            'tipo_gestion'=>'required',
            'periodo'=>'required|in:1,2,3,4',
        ];
    }
    public function messages()
    {
    return [
        // 'anio.max' => 'Seleccione un año Valido',
        'fecha_inicio.required'  => ' Debe de insertar una Fecha Inicio',
        'fecha_fin.required'  => 'Debe de insertar una Fecha Fin',
        'plan.required'  => 'Debe seleccionar por lo menos un plan para habilitar la gestion',
        // 'fecha_fin.after' => 'La fecha ingresada debe ser posterior a la fecha de Inicio de Gestion Ingresada en la casilla anterior',
        'periodo.in' => 'Debe ingresar un valor 1 o 2',
    ];
}
}
