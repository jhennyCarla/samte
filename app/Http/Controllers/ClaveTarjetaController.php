<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clave_tarjeta;
use App\Clave_registro_nota;
use Auth;
use Carbon\Carbon;
class ClaveTarjetaController extends Controller
{
	protected $idContinuar=1;
	protected $nroHojas=2;
	protected  $idGestion=1;

    public function devolverClave()
    {
		 $str = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789"; //55
		$cad = "";
		for($i=0;$i<2;$i++) {
			$cad .= substr($str,rand(0,31),1); 
		}
		return  $cad;	
    }
    public function devolverClaveSelec()
    {
		$str1 = "ABCDEFGHIJ";
		$str2 = "12345"; 
		$cad = "";
		$cad .= substr($str1,rand(0,9),1).substr($str2,rand(0,4),1); 
		return  $cad;	
    }
    public function generar()
    {
    	$results=DB::table('vista_tit_area_gest_plan_doc')->where('id_gestion',3)->groupby('id_tit_gest_plan_area','id_usuario')->orderby('id_usuario','desc')->select('id_tit_gest_pl_area_gr_doc','id_usuario')->get();
    	foreach($results as $result){
    		$cadAux01="";
    		$cadAux02="";
    		$cadAux03="";
    		$cadAux04="";
    		while($cadAux01==$cadAux02 || $cadAux01==$cadAux03 || $cadAux01==$cadAux04 || $cadAux02==$cadAux03 || $cadAux02==$cadAux04 || $cadAux03==$cadAux04){
    			$cadAux01=$this->devolverClaveSelec();
    			$cadAux02=$this->devolverClaveSelec();
    			$cadAux03=$this->devolverClaveSelec();
    			$cadAux04=$this->devolverClaveSelec();
    		}//deben ser las 4 claves diferentes
    		//verificamos si ya esta con claves
    		$resultConsulta=Clave_registro_nota::where('id_titulacion_gest_plan_area_gr_doc',$result->id_tit_gest_pl_area_gr_doc)->get();
    		// no hay datos insertamos
    		if($resultConsulta->isEmpty())
    		{
    			$sql=Clave_registro_nota::create([
    				'id_titulacion_gest_plan_area_gr_doc'=>$result->id_tit_gest_pl_area_gr_doc,
    				'id_usuario'=>$result->id_usuario,
    				'fecha_asignacion'=>Carbon::now(),
    				'clave1'=>$cadAux01,
    				'clave2'=>$cadAux02,
    				'clave3'=>$cadAux03,
    				'clave4'=>$cadAux04
    			]);
    		}else{
    			$rowDato=$resultConsulta->first();
    			DB::table('clave_registro_notas')->where(['id_titulacion_gest_plan_area_gr_doc',$result->id_tit_gest_pl_area_gr_doc],['id'=>$rowDato->id])->update(['id_usuario'=>$result->id_usuario],['fecha_asignacion'=>Carbon::now()],['clave1'=>$cadAux01],['clave2'=>$cadAux02],['clave3'=>$cadAux03],['clave4'=>$cadAux04]);
    		}//fin hay o no claves
    	}//fin todos docentes
    }
    public function generarClave()
    {
    	// $cad=$this->devolverClave();
    	$claveGenerada=Clave_tarjeta::create([
    		'A1'=>encrypt($this->devolverClave()),
    		'A2'=>encrypt($this->devolverClave()),
    		'A3'=>encrypt($this->devolverClave()),
    		'A4'=>encrypt($this->devolverClave()),
    		'A5'=>encrypt($this->devolverClave()),
    		'B1'=>encrypt($this->devolverClave()),
    		'B2'=>encrypt($this->devolverClave()),
    		'B3'=>encrypt($this->devolverClave()),
    		'B4'=>encrypt($this->devolverClave()),
    		'B5'=>encrypt($this->devolverClave()),
			'C1'=>encrypt($this->devolverClave()),
    		'C2'=>encrypt($this->devolverClave()),
    		'C3'=>encrypt($this->devolverClave()),
    		'C4'=>encrypt($this->devolverClave()),
    		'C5'=>encrypt($this->devolverClave()),
			'D1'=>encrypt($this->devolverClave()),
    		'D2'=>encrypt($this->devolverClave()),
    		'D3'=>encrypt($this->devolverClave()),
    		'D4'=>encrypt($this->devolverClave()),
    		'D5'=>encrypt($this->devolverClave()),
			'E1'=>encrypt($this->devolverClave()),
    		'E2'=>encrypt($this->devolverClave()),
    		'E3'=>encrypt($this->devolverClave()),
    		'E4'=>encrypt($this->devolverClave()),
    		'E5'=>encrypt($this->devolverClave()),
			'F1'=>encrypt($this->devolverClave()),
    		'F2'=>encrypt($this->devolverClave()),
    		'F3'=>encrypt($this->devolverClave()),
    		'F4'=>encrypt($this->devolverClave()),
    		'F5'=>encrypt($this->devolverClave()),
 			'G1'=>encrypt($this->devolverClave()),
    		'G2'=>encrypt($this->devolverClave()),
    		'G3'=>encrypt($this->devolverClave()),
    		'G4'=>encrypt($this->devolverClave()),
    		'G5'=>encrypt($this->devolverClave()),
 			'H1'=>encrypt($this->devolverClave()),
    		'H2'=>encrypt($this->devolverClave()),
    		'H3'=>encrypt($this->devolverClave()),
    		'H4'=>encrypt($this->devolverClave()),
    		'H5'=>encrypt($this->devolverClave()),
 			'I1'=>encrypt($this->devolverClave()),
    		'I2'=>encrypt($this->devolverClave()),
    		'I3'=>encrypt($this->devolverClave()),
    		'I4'=>encrypt($this->devolverClave()),
    		'I5'=>encrypt($this->devolverClave()),
 			'J1'=>encrypt($this->devolverClave()),
    		'J2'=>encrypt($this->devolverClave()),
    		'J3'=>encrypt($this->devolverClave()),
    		'J4'=>encrypt($this->devolverClave()),
    		'J5'=>encrypt($this->devolverClave()),
    		'id_usuario'=>Auth::user()->id
    	]);
    	$clave=Clave_tarjeta::all()->last();
    	// return $cad;
    	// return $idClave;
    	return view('claveTarjetas.generarTarjeta',compact('clave'));
    }
    public function asignar(Request $request)
    {
        // return $request;
        $claveNueva=Clave_tarjeta::where('id',$request->clave_nueva)->first();
        if(is_null($claveNueva))
            return "ingrese id clave valida";
        else{
            $claveAnterior=Clave_tarjeta::where('id',$request->clave)->get()->first();
            if(!is_null($claveAnterior))
            {
                $claveAnterior->activo_notas='NO';
                $claveAnterior->save();
            }
            $claveNueva->id_usuario=$request->id;
            $claveNueva->activo_notas='SI';
            $claveNueva->save();
            return redirect()->back();
        }
        // return  $response=Response::json($clave);
    }
}
