<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Defensa extends Model
{
    protected $table = 'defensas';

	protected $fillable = ['titulo_defensa','descripcion','avance','resumen','empresa','grupo_ptaang','facultad','modalidad_ptaang','version','expedido','universidad','empresa','numero_resolucion','fecha_resolucion','autoridad','id_modalidad_titulacion'];

	public function estudiante_defensas()
	{
		return $this->hasMany('App\Estudiante_defensa','id_defensa','id');
	}

	public function asignar_funcion_defensas()
	{
		return $this->hasMany('App\Asignar_funcion_defensa','id_defensa','id');
	}

	public function modalidad_titulacion()
	{
		return $this->belongsTo('App\Modalidad_titulacion', 'id_modalidad_titulacion','id');
	}
	public function cds()
	{
		return $this->hasMany('App\Cd', 'id_defensa','id');
	}
	public function defensa_ambiente()
	{
		return $this->hasOne('App\defensa_ambiente', 'id_defensa', 'id');
	}
}
