<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignar_funcion_defensa extends Model
{
    protected $table = 'asignar_funcion_defensas';

	protected $fillable = ['funcion','id_funcion','id_defensa','id_usuario_asignar_sub_rol'];

	public function carta_nombramientos()
	{
		return $this->hasMany('App\Carta_nombramiento', 'id_asignar_funcion_defensa','id');
	}

	public function defensa()
	{
		return $this->belongsTo('App\Defensa', 'id_defensa','id');
	}

	public function funcion()
	{
		return $this->belongsTo('App\Funcion', 'id_funcion','id');
	}

	public function usuario_asignar_sub_rol()
	{
		return $this->belongsTo('App\Usuario_asignar_sub_rol', 'id_usuario_asignar_sub_rol','id');
	}
}
