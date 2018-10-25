<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clave_registro_nota extends Model
{
    protected $table = 'clave_registro_notas';

    protected $fillable = ['fecha_asignacion','clave1','clave2','clave3','clave4','id_usuario','id_grupo_doc_mat_plan_gest_unid','id_titulacion_gest_plan_area_gr_doc'];

    public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
	}

	public function grupo_materia_plan_gestion_unidad()
	{
		return $this->belongsTo('App\Grupo_materia_plan_gestion_unidad', 'id_grupo_doc_mat_plan_gest_unid', 'id');
	}

	public function titulacion_gest_plan_area_gr_doc()
	{
		return $this->belongsTo('App\Titulacion_gest_plan_area_gr_docente', 'id_titulacion_gest_plan_area_gr_doc', 'id');
	}


}
