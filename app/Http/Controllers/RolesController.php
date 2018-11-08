<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Rol;
use Illuminate\Support\Facades\Input; //tati validacion
use App\Http\Requests\rolesRequest;//msj validaction tati
use App\Events\RolesEvent;
class RolesController extends Controller
{
    private $path = 'roles';
    public function __construct(){
        // Filtrar todos los métodos
        $this->middleware('permisos:3', ['only' => 'create','store']);
        $this->middleware('permisos:3,4', ['only' => 'index']);
        $this->middleware('permisos:4', ['only' => 'update','edit','destroy']);   
    }
   
    public function index(){
        $rol= Rol::all();
        return view($this->path.'.index',compact('rol'));
    }

    public function create(){
        return view($this->path.'.create');
    }

    public function store(rolesRequest $request){
        try{
            $role = new Rol();            
            $role->nombre_rol = $request->nombre_rol;
            $role->descripcion_rol = $request->descripcion_rol;
            $role->save();
            $rol=Rol::all()->last();
               // la descripcion con la se que guardara en la bitacora
            $rol->desc="Registro rol :".$rol->id." con nombre_rol: ".$rol->nombre_rol;
            $rol->action=9;
            event(new RolesEvent($rol));
            return redirect()->route('roles.index')->with(['mensaje3'=>'Guardado correctamente!!!','alert-type'=>'success']);
        }catch (Exception $e){
            return "Fatal Error -".$e->getMessage();
        }   
    }
  
    public function show($id){
        //
    }
  
    public function edit($id){
        $rol = Rol::findOrFail($id);
        return view('roles.edit', compact('rol'));
    }

    public function update(rolesRequest $request, $id){
        $rol_editar=Rol::findOrFail($id);
        $rol_editar->nombre_rol     = $request->nombre_rol;
        $rol_editar->descripcion_rol= $request->descripcion_rol;
        $rol_editar->save();
        $rol_editar->desc="Modifico el registro :".$rol_editar->id." con nombre_rol: ".$rol_editar->nombre_rol;
        $rol_editar->action=10;
        event(new RolesEvent($rol_editar));
        return redirect()->route('roles.index')->with(['mensaje3'=>'Guardado correctamente!!!','alert-type'=>'success']);
    }

    public function destroy($id){
        try {
            $rolEliminar = Rol::findOrFail($id);
            $rolEliminar->desc="Elimino el registro :".$rolEliminar->id." con nombre_rol: ".$rolEliminar->nombre_rol;
            $rolEliminar->action=11;
            event(new RolesEvent($rolEliminar));
            $rolEliminar->delete(); 
            return redirect()->route('roles.index')->with(['mensaje3'=>' Eliminado exitosamente !!','alert-type'=>'success']);
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
    }
}