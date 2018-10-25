<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table = 'gestiones';

    protected $fillable = [ 'anio', 'periodo', 'fecha_inicio', 'fecha_fin', 'activo', 'id_tipo_gestion'];

    public function tipo_gestiones()
	{
		return $this->belongsTo('App\Tipo_gestion', 'id_tipo_gestion', 'id');
	}

	public function plan_gestion_unidades()
	{
		return $this->hasMany('App\Plan_gestion_unidad', 'id_gestion', 'id');
	}
	public function getAnioGestionTipoAttribute()
	{
		return $this->periodo." ".$this->anio." -> ".$this->tipo_gestiones->nombre_tipo_gestion;
	}

	public function titulacion_gestion_plan_areas()
	{
		return $this->hasMany('App\Titulacion_gest_plan_area_gr_docente', 'id_gestion', 'id');
	}
	public function scopeAnio($query,$anio)
	{
		// if($anio!=null){
		// 	return $query->where('id','=',$anio);
		// }
		// if($anio!=null){
			return $query->where('anio','=',$anio);
			// return $query->where('anio','like','%'.$anio.'%');

		// }
		
	}
	public function scopePeriodo($query,$periodo)
	{
		if($periodo!='todo'){
			return $query->wherein('periodo',[1,2]);
		}
	}
}
