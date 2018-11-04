<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Response;
use Validator;
use Carbon\Carbon;
use App\Modalidad_titulacion;
use App\Usuario;
use App\Funcion;
use App\Ambiente;
use App\Tipo_ambiente;
use App\Unidad;
use App\Plan;
use App\Defensa;
use App\Inscripcion;
use App\Asignar_funcion_defensa;
use App\Estudiante_defensa;
use App\Carta_nombramiento;
use App\Usuario_asignar_sub_rol;
use App\usuario_titulo;
use App\titulo;
use App\cd;
use App\Gestion;
use App\Defensa_ambiente;
use Jenssegers\Date\Date;

use DB;
use Auth;
class TitulacionController extends Controller
{
	public function index(Request $request){
		$usuarioLogueado=Usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')->where('a.id',Auth::user()->id)->where('activo','SI')->select('usuario_asignar_sub_roles.id_unidad')->first();
		$planOficial=$this->planUsuarioLogueado($usuarioLogueado->id_unidad);
		if($planOficial!='vacio')
		{	$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_a signar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			->where('d.cod_plan',$planOficial)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::where('cod_plan','=',$planOficial)->get();
		}elseif($request->carrera==""){
		$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			// if($request->carrera)
			// ->where('d.id',$request->carrera)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::all();
			
		}else{
		$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			// if($request->carrera)
			->where('d.id',$request->carrera)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::all();				
		}// return $planes;
	   return view('titulacion.index',compact('usuarios','planes'));
	}
	public function imprimirActas(Request $request){
		$usuarioLogueado=Usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')->where('a.id',Auth::user()->id)->where('activo','SI')->select('usuario_asignar_sub_roles.id_unidad')->first();
		$planOficial=$this->planUsuarioLogueado($usuarioLogueado->id_unidad);
		// return $request->carrera;
		if($planOficial!='vacio')
		{	$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_a signar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			->where('d.cod_plan',$planOficial)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::where('cod_plan','=',$planOficial)->get();
		}elseif($request->carrera==""){
		$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			// if($request->carrera)
			// ->where('d.id',$request->carrera)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::all();
			
		}else{
		$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			// if($request->carrera)
			->where('d.id',$request->carrera)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::all();
				
		}// return $planes;
	   return view('titulacion.imprimirActas',compact('usuarios','planes'));
	}
	public function registrarCd(Request $request){
		$usuarioLogueado=Usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')->where('a.id',Auth::user()->id)->where('activo','SI')->select('usuario_asignar_sub_roles.id_unidad')->first();
		$planOficial=$this->planUsuarioLogueado($usuarioLogueado->id_unidad);
		// return $request->carrera;
		if($planOficial!='vacio')
		{	$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_a signar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->join('unidad_materias as i','i.id_unidad','=','c.id_unidad')
			->join('materias as j','j.id','=','i.id_materia')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			->where('d.cod_plan',$planOficial)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::where('cod_plan','=',$planOficial)->get();
		}elseif($request->carrera==""){
		$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->join('unidad_materias as i','i.id_unidad','=','c.id_unidad')
			->join('materias as j','j.id','=','i.id_materia')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			// if($request->carrera)
			// ->where('d.id',$request->carrera)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::all();
			
		}else{
		$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->join('unidad_materias as i','i.id_unidad','=','c.id_unidad')
			->join('materias as j','j.id','=','i.id_materia')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			// if($request->carrera)
			->where('d.id',$request->carrera)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::all();
			
		}// return $planes;
	   return view('titulacion.registrarCd',compact('usuarios','planes'));
	}
	public function eliminarCd(Request $request){
		$usuarioLogueado=Usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')->where('a.id',Auth::user()->id)->where('activo','SI')->select('usuario_asignar_sub_roles.id_unidad')->first();
		$planOficial=$this->planUsuarioLogueado($usuarioLogueado->id_unidad);
		// return $request->carrera;
		if($planOficial!='vacio')
		{	$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_a signar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->join('unidad_materias as i','i.id_unidad','=','c.id_unidad')
			->join('materias as j','j.id','=','i.id_materia')
			->join('cds as k','k.id_defensa','=','g.id')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			->where('d.cod_plan',$planOficial)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::where('cod_plan','=',$planOficial)->get();
		}elseif($request->carrera==""){
		$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->join('unidad_materias as i','i.id_unidad','=','c.id_unidad')
			->join('materias as j','j.id','=','i.id_materia')
			->join('cds as k','k.id_defensa','=','g.id')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			// if($request->carrera)
			// ->where('d.id',$request->carrera)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::all();
			
		}else{
		$usuarios=Usuario::identidad($request->ci)
			->nombres($request->nombre)
			->apellido($request->apellido)
			// ->with('usuario_asignar_sub_roles')
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as e','e.id_inscripcion','=','b.id')
			->join('estudiante_defensas as f','f.id_inscripcion_grupo_materia_plan_gestion_unidad','=','e.id')
			->join('defensas as g','g.id','=','f.id_defensa')
			->join('Modalidad_titulaciones as h','h.id','=','g.id_modalidad_titulacion')
			->join('unidad_materias as i','i.id_unidad','=','c.id_unidad')
			->join('materias as j','j.id','=','i.id_materia')
			->join('cds as k','k.id_defensa','=','g.id')
			->where('a.id_sub_rol',11)
			->wherein('h.nombre_modalidad',['proyecto de grado','adscripcion','trabajo dirigido','trabajo de internado','tesis'])
			// if($request->carrera)
			->where('d.id',$request->carrera)
			->orderby('apellidos','desc')->paginate(10);
			$planes=Plan::all();
				
		}// return $planes;
	   return view('titulacion.eliminarCd',compact('usuarios','planes'));
	}
	public function agregarCd( Request $request){
		//return $request;
		$cd = new cd();
		$cd->fecha_registro='12-12-12';
		$cd->observacion='null';
		$cd->entregado='si';
		$cd->id_defensa=$request->id_defensa;
		$cd->save();
		return redirect()->back();
	}
	public function quitarCd($id){
		//return $id;
		$cd = cd::where('cds.id_defensa',$id)->get()->first();
		$cd->delete();
		$notificacion = array('mensaje3' =>' Eliminado exitosamente !','alert-type'=>'success');
		return redirect()->back()->with($notificacion);		
	}
	public function planUsuarioLogueado($idUnidad){
		switch ($idUnidad) {
			case '1':
				return '059801';
				// ->where('d.cod_plan','059801')
				// return $query->where('cod_plan',059801); //economia plan 3
				break;
			case '2':
				return '109401';
				// ->where('d.cod_plan','109401')
				// return $query->where('cod_plan',109401); //admin plan:2
				break;
			case '3':
			return '089801';
				// ->where('d.cod_plan','089801')
				// return $query->where('cod_plan',089801); // conta plan:1
				break;
			case '4':
				return '125091';
				// ->where('d.cod_plan','125091')
				// return $query->where('cod_plan',125091); //comercial plan:5
				break;
			case '5':
				return '126091';
				// ->where('d.cod_plan','126091')
				// return $query->where('cod_plan',126091);  //financiera plan:4
				break;
			default:
				return 'vacio';
				break;
		}
	}
	public function crearActa(Request $request){
		$modalidades=Modalidad_titulacion::all()->pluck('nombre_modalidad','id');
		if($request->modalidades!='')
		{
			 // return $request;
		$modalidad=Modalidad_titulacion::modalidad($request->modalidades)->get()->first();
		}else
			$modalidad="vacio";	

		$gestiones=Gestion::orderBy('anio','desc')->where('activo','SI')->wherein('id_tipo_gestion',array(1,2))->orderBy('id_tipo_gestion','desc')->get();
        $gestiones->each(function($gestiones){
         $gestiones->tipo_gestiones;
         $gestiones->plan_gestion_unidades;
 		});

		$funciones=funcion::wherein('nombre_funcion',['PRESIDENTE','TUTOR','DECANO','MIEMBRO'])->get();
		$titulos=titulo::all();

		$funcionPresidentes=usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')
				->join('funciones as b','b.id','=','usuario_asignar_sub_roles.id_funcion')
				->wherein('b.nombre_funcion',['DIRECTOR DE CARRERA'])
				->join('usuario_titulos as c','c.id_usuario','=','a.id')
				->join('titulos as d','d.id','=','c.id_titulo')
				->select('usuario_asignar_sub_roles.id as id_us_sig_sub_rol','b.id','usuario_asignar_sub_roles.id_usuario','d.titulo_abreviado')->get();

		$funcionMiembro=usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')
				->join('funciones as b','b.id','=','usuario_asignar_sub_roles.id_funcion')
				->wherein('b.nombre_funcion',['docente'])
				->select('usuario_asignar_sub_roles.id as id_us_sig_sub_rol','b.id','usuario_asignar_sub_roles.id_usuario')->get();
				
		// $funcionMiembro=usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')
		// 		->join('funciones as b','b.id','=','usuario_asignar_sub_roles.id_funcion')
		// 		->wherein('b.nombre_funcion',['docente'])
		// 		->join('usuario_titulos as c','c.id_usuario','=','a.id')
		// 		->join('titulos as d','d.id','=','c.id_titulo')
		// 		->select('usuario_asignar_sub_roles.id as id_us_sig_sub_rol','b.id','usuario_asignar_sub_roles.id_usuario','d.titulo_abreviado')->get();

		$funcionTutor=usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')
				->join('funciones as b','b.id','=','usuario_asignar_sub_roles.id_funcion')
				->wherein('b.nombre_funcion',['DOCENTE'])
				->join('usuario_titulos as c','c.id_usuario','=','a.id')
				->join('titulos as d','d.id','=','c.id_titulo')
				->select('usuario_asignar_sub_roles.id as id_us_sig_sub_rol','b.id','usuario_asignar_sub_roles.id_usuario','d.titulo_abreviado')->get();

		$funcionDecano=usuario_asignar_sub_rol::join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')
				->join('funciones as b','b.id','=','usuario_asignar_sub_roles.id_funcion')
				->wherein('b.nombre_funcion',['DECANO'])
				->join('usuario_titulos as c','c.id_usuario','=','a.id')
				->join('titulos as d','d.id','=','c.id_titulo')
				->select('usuario_asignar_sub_roles.id as id_us_sig_sub_rol','b.id','usuario_asignar_sub_roles.id_usuario','d.titulo_abreviado')->get();
		$ambiente=ambiente::all();
		$tipo_ambiente=Tipo_ambiente::all()->pluck('nombre_tipo_ambiente','id');
		$unidad=Unidad::all()->pluck('nombre_unidad','id');
		return view('titulacion.crearActa',compact('modalidad','modalidades','funcionPresidentes','funcionMiembro','funcionTutor','funcionDecano','ambiente','tipo_ambiente','unidad','funciones','usuario','titulos','gestiones')); 
	}
	public function eliminarEst(Request $request){
		$usuario=$request->id;
		// $usuarios=Usuario_asignar_sub_rol::where('usuario_asignar_sub_roles.id','=',$request->id)->join('usuarios as a','a.id','=','usuario_asignar_sub_roles.id_usuario')
		// 	->where('usuario_asignar_sub_roles.id_sub_rol','=',11)
		// 	->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','usuario_asignar_sub_roles.id')
		// 	->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
		// 	->join('plan_gestion_unidades as f','f.id','=','b.id_plan_gestion_unidad')
		// 	->join('planes as g','g.id','=','f.id_plan')
		// 	->select('a.id as id_usuario','usuario_asignar_sub_roles.id as id_usu_asig_sub_rol','a.nombres','a.apellidos','usuario_asignar_sub_roles.cod_sis','g.nombre_plan','c.id as id_ins','c.id_inscripcion')
		// 	->first();
		return $response=Response::json($usuario);
	}
	public function buscar(Request $request){
		$gestion=gestion::all()->last()->id;
		$usuarios=Usuario::identidad($request->ci)->nombres($request->nombre)->apellido($request->apellido)->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->noBusqueda($request->id_quitar)
			->join('plan_gestion_unidades as c','c.id','=','b.id_plan_gestion_unidad')
			->join('planes as d','d.id','=','c.id_plan')
			->where('c.id_gestion',$gestion)
			->select('usuarios.nombres','usuarios.apellidos','a.cod_sis','d.nombre_plan','usuarios.id as id_usuario','a.id as id_usuario_asignar_sub_rol','usuarios.doc_identidad','b.id as id_inscripcion')
			->get();
		$data = ['usuarios'=>$usuarios, 'id_modalidad'=>$request['id_modalidad']];
		return $response=Response::json($data);
	}
	public function buscarUsuario(Request $request){
		// dd($request);
		$usuarios=inscripcion::where('inscripciones.id','=',$request->id)
			->join('usuario_asignar_sub_roles as a','a.id','=','inscripciones.id_usuario_asignar_sub_rol')
			->join('Usuarios as b','b.id','=','a.id_usuario')
			->where('a.id_sub_rol','=',11)
			// ->where('inscripciones.id','<>',20)
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','inscripciones.id')
			->join('plan_gestion_unidades as f','f.id','=','inscripciones.id_plan_gestion_unidad')
			->join('planes as g','g.id','=','f.id_plan')
			->select('b.id as id_usuario','a.id as id_usu_asig_sub_rol','b.nombres','b.apellidos','a.cod_sis','g.nombre_plan','inscripciones.id as id_ins')
			->first();
		
		return $response=Response::json($usuarios);
	}
	public function addAmbiente(Request $request){
	  $rules = array(
			'nombre_ambiente' => 'required|string',
			'max_estudiantes' => 'required|int',
			'id_tipo_ambiente'=>'required',
			'id_unidad'=>'required'
		);
		$validator = Validator::make ( Input::all(), $rules);
		if ($validator->fails()){
			return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
		}else {
			$ambiente= new Ambiente($request->all());
			$ambiente->ambiente_activo='si';
			$ambiente->save();
			return response()->json($ambiente);
		}       
	}
	public function showAmbiente($id){
		$ambiente=Ambiente::find($id);
		return response()->json($ambiente);
	}
	public function editAmbiente(Request $request){
		$ambiente = Ambiente::find ($request->id);
		$ambiente->nombre_ambiente = $request->nombre_ambiente;
		$ambiente->id_tipo_ambiente = $request->id_tipo_ambiente;
		$ambiente->id_unidad = $request->id_unidad;
		$ambiente->max_estudiantes = $request->max_estudiantes;
		$ambiente->save();
		return response()->json($ambiente);
	}
	public function addProfesional(Request $request){		
		$rules = array(
			'apellidos' => 'required|string',
			'nombres' => 'required|string',
			'doc_identidad' => 'required|string',
			'sexo'=>'required',
			'id_funcion'=>'required',
			'titulo_nombre'=>'required'
		);
		$validator = Validator::make ( Input::all(), $rules);
		if ($validator->fails()){
			return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
		}else{
			$user=new Usuario($request->all());
			$user->login =$request->doc_identidad;
			$user->clave =bcrypt($request->doc_identidad);
			$user->save();
			
			$usuario=Usuario::all()->last()->id;

			$id_titulo=titulo::where('titulos.titulo_abreviado', $request->titulo_nombre)->select('titulos.id')->first();
			
			$titulo=new usuario_titulo($request->all());
			$titulo->id_usuario=$usuario;
			$titulo->id_titulo=$id_titulo['id'];
			$titulo->save();

			$subrol= new Usuario_asignar_sub_rol($request->all());
			$subrol->id_sub_rol=7;
			$subrol->id_unidad=7;
			$subrol->id_usuario=$usuario;
			if($request->id_funcion==10 or $request->id_funcion==12){
				$subrol->id_funcion=1;
			}elseif($request->id_funcion==11){
				$subrol->id_funcion=11;
			}elseif($request->id_funcion==9){
				$subrol->id_funcion=9;
			}
			$subrol->save();
		
			$arreglo = array(
				"doc_identidad"=> $user->clave,
				"apellidos"=>$user->apellidos,
				"nombres"=>$user->nombres,
				"sexo"=>$user->sexo,
				"id"=>$user->id,		
				"id_funcion"=>$subrol->id_funcion,
				"id_sub_rol"=>7,
				"id_unidad"=>7,
				"id_usuario"=>$user->id,
				"titulo_nombre"=>$request->titulo_nombre
			);
			return response()->json($arreglo);
		}      
	}
	public function showProfesional($id){
		$user=Usuario::where('usuarios.id','=',$id)
			->join('usuario_titulos as a','a.id_usuario','=','usuarios.id')
			->join('titulos as b','b.id','=','a.id_titulo')
			->first();
		$user_funcion=usuario_asignar_sub_rol::where('usuario_asignar_sub_roles.id_usuario','=',$id)->first();

		$profesional=array(
			"id"=>$user_funcion->id,
			"nombres"=>$user->nombres,
			"apellidos"=>$user->apellidos,
			"doc_identidad"=>$user->doc_identidad,
			"sexo"=>$user->sexo,
			"id_funcion"=>$user_funcion->id_funcion,
			"titulo_nombre"=>$user->id_titulo
		);
		return response()->json($profesional);
	}
	public function editProfesional(Request $request){
		$user =Usuario::where('id',$request->id)->first();
		$user->nombres=$request->nombres;
		$user->apellidos=$request->apellidos;
		$user->doc_identidad=$request->doc_identidad;
		$user->save();

		$user_funcion=usuario_asignar_sub_rol::where('id_usuario',$request->id)->first();
		$user_funcion->id_funcion=$request->id_funcion;
		$user_funcion->save();

		$titulo=usuario_titulo::where('usuario_titulos.id_usuario', $request->id)->first();
		$titulo->id_titulo=$request->titulo_nombre;
		$titulo->save();


		$prof= array(
			"nombres"=>$user->nombres,
			"apellidos"=>$user->apellidos,
			"doc_identidad"=>$user->doc_identidad,
			"id_funcion"=>$user_funcion->id_funcion,
			"titulo_nombre"=>$titulo->id_titulo
			
		);	
		return response()->json($prof);
	}
	public function store(Request $request){	
		$defensa_user=new Defensa($request->all());
		$defensa_user->id_modalidad_titulacion=$request->id_modalidad;
		
		if($request->nombre_modalidad=="PROYECTO DE GRADO" or $request->nombre_modalidad=="ADSCRIPCION" or $request->nombre_modalidad=="TESIS" or $request->nombre_modalidad=="TRABAJO DIRIGIDO" or $request->nombre_modalidad=="TRABAJO DE INTERNADO")
		{
			if($request->nombre_modalidad=="TRABAJO DIRIGIDO" or $request->nombre_modalidad=="ADSCRIPCION" ){
				$defensa_user->empresa        =$request->empresa;
			}else{
				$defensa_user->empresa='null';
			}
			$defensa_user->save();

			$defensa_ambiente=new Defensa_ambiente($request->all());
			$defensa_ambiente->id_defensa=$defensa_user->id;
			$defensa_ambiente->save();

			$asignar_presidente=new Asignar_funcion_defensa();
			$asignar_presidente->funcion="presidente";
			$asignar_presidente->id_defensa=$defensa_user->id;
			$asignar_presidente->id_usuario_asignar_sub_rol=$request->presidente;
			$asignar_presidente->id_funcion=$request->presidente_funcion;
			$asignar_presidente->save();

			$asignar_miembro1=new Asignar_funcion_defensa();
			$asignar_miembro1->funcion="miembro1";
			$asignar_miembro1->id_defensa=$defensa_user->id;
			$asignar_miembro1->id_usuario_asignar_sub_rol=$request->miembro1;
			$asignar_miembro1->id_funcion=$request->miembro1_funcion;
			$asignar_miembro1->save();

			$asignar_miembro2=new Asignar_funcion_defensa();
			$asignar_miembro2->funcion="miembro2";
			$asignar_miembro2->id_defensa=$defensa_user->id;
			$asignar_miembro2->id_usuario_asignar_sub_rol=$request->miembro2;
			$asignar_miembro2->id_funcion=$request->miembro2_funcion;
			$asignar_miembro2->save();

			$asignar_miembro3=new Asignar_funcion_defensa();
			$asignar_miembro3->funcion="miembro3";
			$asignar_miembro3->id_defensa=$defensa_user->id;
			$asignar_miembro3->id_usuario_asignar_sub_rol=$request->miembro3;
			$asignar_miembro3->id_funcion=$request->miembro3_funcion;
			$asignar_miembro3->save();

			$asignar_tutor=new Asignar_funcion_defensa();
			$asignar_tutor->funcion="tutor";
			$asignar_tutor->id_defensa=$defensa_user->id;
			$asignar_tutor->id_usuario_asignar_sub_rol=$request->tutor;
			$asignar_tutor->id_funcion=$request->tutor_funcion;
			$asignar_tutor->save();

			$asignar_decano=new Asignar_funcion_defensa();
			$asignar_decano->funcion="decano";
			$asignar_decano->id_defensa=$defensa_user->id;
			$asignar_decano->id_usuario_asignar_sub_rol=$request->decano;
			$asignar_decano->id_funcion=$request->decano_funcion;
			$asignar_decano->save();
			
			$id_usuario=$request->id_usuario;
			if(is_array($id_usuario))
			{
				foreach ($id_usuario as $id_usuarios)
				{		
					$est_defensa 				=new Estudiante_defensa();
					$est_defensa->nota 			=$request->nota;
					$est_defensa->nota_literal	=$request->nota_literal;
					$est_defensa->observacion	=$request->observacion;
					$est_defensa->resultado_final='0';
					$est_defensa->id_defensa	=$defensa_user->id;
					$est_defensa->id_inscripcion_grupo_materia_plan_gestion_unidad=$id_usuarios;
					$est_defensa->save();
				}
			}
		}

		if($request->nombre_modalidad=="PTAANG")
		{
			$defensa_user->id_ambiente 		  ='2';
			$defensa_user->facultad 		  ='FACULTAD DE CIENCIAS ECONOMICAS';
			$defensa_user->universidad 		  ='UNIVERSIDAD MAYOR DE SAN SIMON';
			$defensa_user->save();

			$id_usuario=$request->id_usuario;
			if(is_array($id_usuario))
			{
				foreach ($id_usuario as $id_usuarios)
				{	
					$est_defensa 				      =new Estudiante_defensa();
					$est_defensa->nota 			  =$request->nota_ptaang;
					$est_defensa->nota_literal=$request->nota_literal_ptaang;
					$est_defensa->observacion	='NULL';
					$est_defensa->resultado_final='0';
					$est_defensa->id_defensa	=$defensa_user->id;
					$est_defensa->id_inscripcion_grupo_materia_plan_gestion_unidad=$id_usuarios;
					$est_defensa->save();
				}
			}		
		}

		if($request->nombre_modalidad=="EXCELENCIA ACADEMICA" or $request->nombre_modalidad=="RENDIMIENTO ACADEMICO")
		{
			$defensa_user->numero_resolucion=$request->numero_resolucion;
			$defensa_user->fecha_resolucion=$request->fecha_resolucion;
			$defensa_user->id_ambiente 		  ='2';
			$defensa_user->save();

			$asignar_autoridad=new Asignar_funcion_defensa();
			$asignar_autoridad->funcion=$request->nombre_modalidad;
			$asignar_autoridad->id_defensa=$defensa_user->id;
			$asignar_autoridad->id_usuario_asignar_sub_rol=$request->autoridad;
			$asignar_autoridad->id_funcion=$request->autoridad_funcion;
			$asignar_autoridad->save();

			$id_usuario=$request->id_usuario;
			if(is_array($id_usuario))
			{
				foreach ($id_usuario as $id_usuarios)
				{	
					$est_defensa 				      =new Estudiante_defensa();
					$est_defensa->observacion	=$request->nombre_modalidad;;
					$est_defensa->resultado_final='0';
					$est_defensa->id_defensa	=$defensa_user->id;
					$est_defensa->id_inscripcion_grupo_materia_plan_gestion_unidad=$id_usuarios;
					$est_defensa->save();
				}
			}	
		}
		return redirect()->route('titulacion.crearActa');	
	}
	public function show($id){
		$usuario=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('plan_gestion_unidades as g','g.id','=','b.id_plan_gestion_unidad')
			->join('planes as h','h.id','=','g.id_plan')
			->join('Modalidad_titulaciones as i','i.id','=','e.id_modalidad_titulacion')
			->join('ambientes as j','j.id','=','e.id_ambiente')
			->where('a.id_sub_rol',11)
			->select('usuarios.id as id_usuario','a.cod_sis','usuarios.nombres','usuarios.apellidos','h.nombre_plan','e.titulo_defensa','e.id_modalidad_titulacion','i.nombre_modalidad','d.id_defensa','d.nota','d.nota_literal','d.observacion','j.nombre_ambiente','e.fecha_defensa','e.hora_inicio_defensa','e.hora_fin_defensa','e.descripcion')->first();
		return view('titulacion.informacionActa',compact('usuario'));
	}
	public function edit($id){
		$usuario=Usuario::where('usuarios.id','=',$id)->get()->first();
		return view('titulacion.editarRegistroActa');
	}
	public function update(Request $request, $id){
		$usuario=User::where('users.id',$id)->get()->first();
        $usuario->type_users_id = 2;
        $usuario->name          = $request->name;
        $usuario->lastname      = $request->lastname;
        $usuario->email         = $request->email;
        $usuario->password      = bcrypt($request->password);
        $usuario->save();
        return redirect()->route('titulacion.index');
	}
	public function destroy($id){
			$usuario = Usuario::where('usuarios.id',$id)->get()->first();
			$usuario->delete();
			$notificacion = array('mensaje3' =>' Eliminado exitosamente !','alert-type'=>'success');
			return redirect()->back()->with($notificacion);
	}
	public function generar_designacionTribunal($id){
		$fecha=Date::today()->format('j F \d\e\l Y'); 
		$usuario=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('plan_gestion_unidades as g','g.id','=','b.id_plan_gestion_unidad')
			->join('planes as h','h.id','=','g.id_plan')
			->join('Modalidad_titulaciones as i','i.id','=','e.id_modalidad_titulacion')
			->where('a.id_sub_rol',11)
			->select('usuarios.id as id_usuario','a.cod_sis','usuarios.nombres','usuarios.apellidos','h.nombre_plan','e.titulo_defensa','e.id_modalidad_titulacion','i.nombre_modalidad','d.id_defensa')->first();

		$tribunales=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Modalidad_titulaciones as f','f.id','=','e.id_modalidad_titulacion')
			->join('asignar_funcion_defensas as g','g.id_defensa','=','e.id')
			->join('usuario_asignar_sub_roles as h','h.id','=','g.id_usuario_asignar_sub_rol')
			->join('usuarios as i','i.id','=','h.id_usuario')
			->join('usuario_titulos as j','j.id_usuario','=','i.id')
			->join('titulos as k','k.id','=','j.id_titulo')
			->where('a.id_sub_rol',11)
			->wherein('g.funcion',['miembro1','miembro2','miembro3'])
			->wherein('f.nombre_modalidad',['PROYECTO DE GRADO','ADSCRIPCION'])
			->select('usuarios.id as id_usuario','g.id_usuario_asignar_sub_rol','i.nombres','i.apellidos','k.titulo_abreviado')->get();

			$view = \View::make('titulacion.designacionTribunal', compact('usuario','tribunales','fecha'))->render();
				$pdf = \App::make('dompdf.wrapper');
				$pdf->loadHTML($view);
				return $pdf->stream('designacionTribunal.pdf'); 
	}
	public function generar_primerRecordatorio($id){
		$fecha=Date::today()->format('j F \d\e\l Y');
		$usuario=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Modalidad_titulaciones as f','f.id','=','e.id_modalidad_titulacion')
			->select('usuarios.id as id_usuario','a.cod_sis','usuarios.nombres','usuarios.apellidos','e.titulo_defensa','e.id_modalidad_titulacion','e.fecha_defensa','e.hora_inicio_defensa','e.hora_fin_defensa','f.nombre_modalidad')->first();

		$tribunales=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Asignar_funcion_defensas as f','f.id_defensa','=','e.id')
			->wherein('f.funcion',['miembro1','miembro2','miembro3'])
			->join('usuario_asignar_sub_roles as g','g.id','=','f.id_usuario_asignar_sub_rol')
			->join('usuarios as h','h.id','=','g.id_usuario')
			->join('usuario_titulos as i','i.id_usuario','=','h.id')
			->join('titulos as j','j.id','=','i.id_titulo')
			->select('usuarios.id as id_usuario','f.id_usuario_asignar_sub_rol','h.nombres','h.apellidos','j.titulo_abreviado')->get();
			
			$view = \View::make('titulacion.primerRecordatorio', compact('usuario','tribunales','fecha'))->render();
			$pdf = \App::make('dompdf.wrapper');
			$pdf->loadHTML($view);
			return $pdf->stream('primerRecordatorio.pdf');    
	}
	public function generar_actaDefensa($id){
		$fecha=Date::today()->format('j F \d\e\l Y');
		$usuario=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Asignar_funcion_defensas as f','f.id_defensa','=','e.id')
			->join('plan_gestion_unidades as g','g.id','=','b.id_plan_gestion_unidad')
			->join('planes as h','h.id','=','g.id_plan')
			->join('Modalidad_titulaciones as i','i.id','=','e.id_modalidad_titulacion')
			->select('usuarios.id as id_usuario','a.cod_sis','usuarios.nombres','usuarios.apellidos','h.nombre_plan','e.titulo_defensa','i.nombre_modalidad')->first();

		$presidente=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Asignar_funcion_defensas as f','f.id_defensa','=','e.id')
			->where('f.funcion','=','presidente')
			->join('usuario_asignar_sub_roles as g','g.id','=','f.id_usuario_asignar_sub_rol')
			->join('usuarios as h','h.id','=','g.id_usuario')
			->join('usuario_titulos as i','i.id_usuario','=','h.id')
			->join('titulos as j','j.id','=','i.id_titulo')
			->select('usuarios.id as id_usuario','f.id_usuario_asignar_sub_rol','h.nombres','h.apellidos','j.titulo_abreviado')->get();
			
		$tribunales=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Asignar_funcion_defensas as f','f.id_defensa','=','e.id')
			->wherein('f.funcion',['miembro1','miembro2','miembro3'])
			->join('usuario_asignar_sub_roles as g','g.id','=','f.id_usuario_asignar_sub_rol')
			->join('usuarios as h','h.id','=','g.id_usuario')
			->join('usuario_titulos as i','i.id_usuario','=','h.id')
			->join('titulos as j','j.id','=','i.id_titulo')
			->select('usuarios.id as id_usuario','f.id_usuario_asignar_sub_rol','h.nombres','h.apellidos','j.titulo_abreviado')->get();
		
		$view = \View::make('titulacion.actaDefensa', compact('usuario','presidente','tribunales','fecha'))->render();
		   
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('actaDefensa.pdf');
	}
	public function generar_testimonio($id){
		$fecha=Date::today()->format('j F \d\e\l Y');
		$usuario=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Asignar_funcion_defensas as f','f.id_defensa','=','e.id')
			->join('plan_gestion_unidades as g','g.id','=','b.id_plan_gestion_unidad')
			->join('planes as h','h.id','=','g.id_plan')
			->join('Modalidad_titulaciones as i','i.id','=','e.id_modalidad_titulacion')
			->select('usuarios.id as id_usuario','a.cod_sis','usuarios.nombres','usuarios.apellidos','h.nombre_plan','e.titulo_defensa','d.nota','i.nombre_modalidad')->first();

		$presidente=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Asignar_funcion_defensas as f','f.id_defensa','=','e.id')
			->where('f.funcion','=','presidente')
			->join('usuario_asignar_sub_roles as g','g.id','=','f.id_usuario_asignar_sub_rol')
			->join('usuarios as h','h.id','=','g.id_usuario')
			->join('usuario_titulos as i','i.id_usuario','=','h.id')
			->join('titulos as j','j.id','=','i.id_titulo')
			->select('usuarios.id as id_usuario','f.id_usuario_asignar_sub_rol','h.nombres','h.apellidos','j.titulo_abreviado')->get();
			
		$tribunales=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->where('a.id_sub_rol',11)
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('Asignar_funcion_defensas as f','f.id_defensa','=','e.id')
			->wherein('f.funcion',['miembro1','miembro2','miembro3'])
			->join('usuario_asignar_sub_roles as g','g.id','=','f.id_usuario_asignar_sub_rol')
			->join('usuarios as h','h.id','=','g.id_usuario')
			->join('usuario_titulos as i','i.id_usuario','=','h.id')
			->join('titulos as j','j.id','=','i.id_titulo')
			->select('usuarios.id as id_usuario','f.id_usuario_asignar_sub_rol','h.nombres','h.apellidos','j.titulo_abreviado')->get();

		$view = \View::make('titulacion.testimonio', compact('usuario','presidente','tribunales','fecha'))->render();
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('testimoni.pdf');
	}
	public function resumenActa($id){
		$usuario=Usuario::where('usuarios.id','=',$id)
			->join('usuario_asignar_sub_roles as a','a.id_usuario','=','usuarios.id')
			->join('inscripciones as b','b.id_usuario_asignar_sub_rol','=','a.id')
			->join('inscripcion_grupo_materia_plan_gestion_unidades as c','c.id_inscripcion','=','b.id')
			->join('estudiante_defensas as d','d.id_inscripcion_grupo_materia_plan_gestion_unidad','=','c.id')
			->join('defensas as e','e.id','=','d.id_defensa')
			->join('plan_gestion_unidades as g','g.id','=','b.id_plan_gestion_unidad')
			->join('planes as h','h.id','=','g.id_plan')
			->join('Modalidad_titulaciones as i','i.id','=','e.id_modalidad_titulacion')
			->join('ambientes as j','j.id','=','e.id_ambiente')
			->where('a.id_sub_rol',11)
			->select('usuarios.id as id_usuario','a.cod_sis','usuarios.nombres','usuarios.apellidos','h.nombre_plan','e.titulo_defensa','e.id_modalidad_titulacion','i.nombre_modalidad','d.id_defensa','d.nota','d.nota_literal','d.observacion','e.fecha_defensa','e.descripcion')->first();
		return view('titulacion.resumenActa',compact('usuario'));
	}
	public function reportes(Request $request){
		$gestiones=Gestion::select('anio')->groupBy('anio')->orderBy('anio','desc')->get();
		$reporte=Gestion::anio($request->anio)
		// ->periodo($request->periodo)
		->get();
		if(!isset($reporte))
			$reporte='vacio';
		// if($request->anio!='')
		// {
			// return $reporte;
		// }else{
			// $gestion="vacio";
		// }xattr_get(filename, name)
		// return $request->anio;
		return view('titulacion.reportesTitulacion',compact('gestiones','reporte'));
	}
	public function reporte_mes(Request $request, $anio, $periodo){
		$anio = $request->anio;
		$periodo = $request->periodo;
		$reporte=DB::table('vista_reporte_titulacion')->where('anio',$anio)->select(DB::raw('count(nombre_plan) as cantidad'),DB::raw('MONTH(fecha_defensa) mes'),'nombre_plan')->groupBy('mes','nombre_plan')->get();
		// $reporte=1;
		// return $reporte;

		$reporteMes=DB::table('vista_reporte_titulacion')->where('anio',$request->anio)->where('fecha_defensa',$request->anio.'-09-19')->count();

		$view = \View::make('titulacion.reporteMes',compact('reporte','anio','periodo','eneroEco'));
			$pdf = \App::make('dompdf.wrapper');
			$pdf->loadHTML($view);
			
			return $pdf->stream('reporteMes.pdf');
	}
	public function reporte_carrera(Request $request, $anio, $periodo){
		$anio = $request->anio;
		$periodo = $request->periodo;
		//proyecto de grado
		$reporteCarrera=DB::table('vista_reporte_titulacion')->where('anio',$request->anio)
			->select('id_plan','nombre_modalidad','nombre_plan',DB::raw('count(nombre_plan) as cantidad'))
			->groupBy('nombre_modalidad','nombre_plan','id_plan')
			->get();

		$planes=Plan::all();
		$modalidades=Modalidad_titulacion::all();
		$view = \View::make('titulacion.reporteCarrera',compact('reporte','anio','periodo','reporteCarrera','planes','modalidades'));
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('reporteCarrera.pdf');
	}
	public function reporte_modalidad(Request $request, $anio, $periodo){
		$anio = $request->anio;
		$periodo = $request->periodo;
		$reporteModalidad=DB::table('vista_reporte_titulacion')->where('anio',$request->anio)
			->select('id_plan','nombre_modalidad','nombre_plan','cod_plan',DB::raw('count(nombre_plan) as cantidad'))
			->groupBy('nombre_modalidad','nombre_plan','id_plan','cod_plan')
			->get();

		$carrera=DB::table('vista_reporte_titulacion')->where('anio',$request->anio)
			->select('id_plan','nombre_plan','cod_plan',DB::raw('count(nombre_plan) as cantidad'))
			->groupBy('nombre_plan','id_plan','cod_plan')
			->get();
			
		$planes=Plan::all();
		$modalidades=Modalidad_titulacion::all();
		$view = \View::make('titulacion.reporteModalidad',compact('reporte','anio','periodo','reporteModalidad','planes','modalidades','carrera'));
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->stream('reporteModalidad.pdf');
	}

	public function reporte_genero(Request $request, $anio, $periodo){
			$anio = $request->anio;
			$periodo = $request->periodo;
			$reporteGenero=DB::table('vista_reporte_titulacion')->where('anio',$request->anio)
			->select('id_plan','nombre_plan','cod_plan',DB::raw('count(nombre_plan) as cantidad'))
			->groupBy('nombre_plan','id_plan','cod_plan')
			->get();
			
			


			$planes=Plan::all();
			$modalidades=Modalidad_titulacion::all();
			$view = \View::make('titulacion.reportegenero',compact('reporte','anio','periodo','reporteGenero','planes','modalidades'));
			$pdf = \App::make('dompdf.wrapper');
			$pdf->loadHTML($view);
			return $pdf->stream('reporteGenero.pdf');
	}
	public function reporte_lista(Request $request, $anio, $periodo){
			// $anio = $request->anio;
			// $periodo = $request->periodo;
			// $reporte=DB::table('vista_reporte_titulacion')->where('anio',$request->anio)->get();
			// $cont=count($reporte);
				$view = \View::make('titulacion.reportelista');
			$pdf = \App::make('dompdf.wrapper');
			$pdf->loadHTML($view);
			return $pdf->stream('reporteLista.pdf');	
	}

}
