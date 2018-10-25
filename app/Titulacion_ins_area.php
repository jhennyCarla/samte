<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulacion_ins_area extends Model
{
    protected $table = 'titulacion_ins_areas';

    protected $fillable = ['codigo_ins_area','id_titulacion_gest_plan_area_gr_doc','id_inscripcion'];

    public function titulacion_gest_plan_area_gr_docente()
	{
		return $this->belongsTo('App\Titulacion_gest_plan_area_gr_docente', 'id_titulacion_gest_plan_area_gr_doc', 'id');
	}

	public function inscripcion()
	{
		return $this->belongsTo('App\Inscripcion', 'id_inscripcion', 'id');
	}

	public function titulacion_nota_areas()
	{
		return $this->hasMany('App\Titulacion_nota_area', 'id_titulacion_ins_area','id');
	}
}
