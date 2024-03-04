<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function index()
    {    
        return view('admin.pages.gestion_clientes.calendario_pago.index');
    }

    public function verOcultos()
    {    
        return view('admin.pages.gestion_clientes.calendario_pago.ocultos');
    }
}
