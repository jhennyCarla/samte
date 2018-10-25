<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScriptInsTitEgController extends Controller
{
    public function subirScriptInscritosTitulacion()
    {
        return view('examen_de_grado.subirScriptInsTit');
    }
}
