<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function asistenciaIndex()
    {
        return view('admin.pages.asistencia.trabajador.asistencia');
    }

    public function asistenciaCalendario()
    {
        return view('admin.pages.asistencia.trabajador.calendario');
    }

    public function videollamada()
    {
        return view('admin.pages.asistencia.trabajador.videollamada');
    }
}
