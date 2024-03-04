<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformeJornadasController extends Controller
{
    public function index()
    {    
        return view('admin.pages.asistencia.informe_jornadas.index');
    }
}
