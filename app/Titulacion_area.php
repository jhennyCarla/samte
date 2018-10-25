<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Titulacion_area extends Model
{
    protected $table = 'Titulacion_areas';

    protected $fillable = ['codigo_area','nombre_area','nombre_corto'];

    public function titulacion_gestion_plan_areas()
	{
		return $this->hasMany('App\Titulacion_gestion_plan_area', 'id_titulacion_area','id');
	}
}
