<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulacion_plan_area extends Model
{
    protected $table = 'titulacion_plan_areas';

    protected $fillable = ['id_plan','id_titulacion_area'];

 //    public function gestion()
	// {
	// 	return $this->belongsTo('App\Gestion', 'id_gestion', 'id');
	// }

	public function plan()
	{
		return $this->belongsTo('App\Plan', 'id_plan', 'id');
	}

	public function titulacion_area()
	{
		return $this->belongsTo('App\Titulacion_area', 'id_titulacion_area', 'id');
	}

	public function titulacion_gest_plan_areas()
	{
		return $this->hasMany('App\Titulacion_gestion_plan_area', 'id_titulacion_gest_plan_area', 'id');
	}
}
