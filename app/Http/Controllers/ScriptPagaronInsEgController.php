<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion;
use Excel;
use DB;
class ScriptPagaronInsEgController extends Controller
{
    public function subirScriptPagaronEg()
    {
    	$gestiones=Gestion::orderBy('anio','desc')->where('activo','SI')->wherein('id_tipo_gestion',array(1,2))->orderBy('id_tipo_gestion','desc')->get();
        $gestiones->each(function($gestiones){
         $gestiones->tipo_gestiones;
         $gestiones->plan_gestion_unidades;
     });   
        // return $gestiones
        return view('examen_de_grado.subirScriptPagaronEg',compact('gestiones'));
    }
    public function importPagEgScript(Request $request)
    {
    	// return "pagaron"
    	if($request->hasfile('archivo'))
    	{
    		$path = $request->file('archivo')->getRealPath();
    		$data = \Excel::load($path)->get();
    		//ponemos a todos los estudiantes no inscrito al taller ins_tesis='NO',ins_g_eg='NO'
    		// $resultActualizar=DB::table('inscripciones')->where([['id_plan_=NO'],['ins_gr_eg=NO']])->update([['ins_tesis'=>'NO'],['ins_gr_eg=NO'=>'NO']]);
    		if($data->count() )
    		{
    			foreach ($data as $key => $value) {
    				// echo $value;
    				// $resultConsulta=DB::table('vista_inscripcion')->where([['id_gestion',$request->gestion],['cod_plan','like','%'.$value->plan],['insc_tesis','SI']])->get();
    				// return "resultado ".$resultConsulta;
    				if($value->nropreimpreso!="" && $value->nropreimpreso>0 )
    					$resultConsulta=DB::table('vista_inscripcion')->where([['id_gestion',$request->gestion],['cod_plan','like','%'.$value->plan],['insc_tesis','SI'],['cod_sis',$value->sis_cod]])->get();
    				else
    					$resultConsulta=DB::table('vista_inscripcion')->where([['id_gestion',$request->gestion],['cod_plan','like','%'.$value->plan],['insc_tesis','SI'],['doc_identidad',$value->nro_doc]])->get();
    				if($resultConsulta->count()>0)
    				{
    					$rowAux=$resultConsulta->first();
    					echo $rowAux->apellidos.' '.$rowAux->nombres."<br>";
    					// ex_gr_estado enum('M','N','I') N nada, M matricular, I inscrito
    					// $resultActualizar=Inscripcion::
    					DB::table('inscripciones')->where('id',$rowAux->id_inscripcion)->update(['ex_gr_estado'=>'I']);
    				}
    				else
    				{
    					echo "<strong>NO ENCONTRADO ESTUDIANTE</strong><br>";
    				}//hay dato de inscripcion
    			}	// fin if revision de que tiene que haber un registro
    		}	
    	}
    	else
    	{
    		dd('Request data no tiene ningun archivo a importar');
    	}
    } 
}
