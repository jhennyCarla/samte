<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Titulacion_gest_plan_area_gr_docente extends Model
{
    protected $table = 'titulacion_gest_plan_area_gr_docentes';

    protected $fillable = ['grupo','activo_notas','activo_correccion','activo_recuperatorio','activo_est_ver_nota','id_titulacion_gest_plan_area','id_usuario_asignar_sub_rol','id_gestion'];

	public function usuario_asignar_sub_roles()
	{
		return $this->belongsTo('App\Usuario_asignar_sub_rol', 'id_usuario_asignar_sub_rol', 'id');
	}

	public function titulacion_gestion_plan_areas()
	{
		return $this->belongsTo('App\Titulacion_gestion_plan_area', 'id_titulacion_gest_plan_area', 'id');
	}

	public function gestion()
	{
		return $this->belongsTo('App\Gestion','id_gestion','id');
	}

	public function titulacion_ins_areas()
	{
		return $this->hasMany('App\Titulacion_ins_area', 'id_id_titulacion_gest_plan_area_gr_doc','id');
	}

	public function clave_registro_notas()
	{
		return $this->hasMany('App\Clave_registro_nota', 'id_titulacion_gest_plan_area_gr_doc','id');
	}



}
