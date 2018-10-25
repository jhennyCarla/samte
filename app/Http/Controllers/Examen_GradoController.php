<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Examen_GradoController extends Controller
{
    
    public function index()
    {
        //
    }
 
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function registrarNotas()
    {
        return view('examen_de_grado.registrarNotasEg');
    }

    public function adminOpciones()
    {
        return view('examen_de_grado.adminOpcionesEg');
    }

    public function imprimirListas()
    {
        return view('examen_de_grado.imprimirListasEg');
    }

     public function reportes()
    {
        return view('examen_de_grado.reportesEg');
    }

}
