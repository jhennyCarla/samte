<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defensa_ambiente extends Model
{
    protected $table = 'defensa_ambientes';

    protected $fillable = ['fecha_defensa','hora_inicio_defensa','hora_fin_defensa','id_ambiente','id_defensa'];

    public function defensas()
	{
		return $this->belongsTo('App\Defensa', 'id_defensa', 'id');
	}

	public function ambientes()
	{
		return $this->belongsTo('App\Ambiente', 'id_ambiente', 'id');
	}
}
