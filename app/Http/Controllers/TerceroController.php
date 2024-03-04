<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerceroController extends Controller
{
    public function index()
    {    
        return view('admin.pages.gestion_clientes.terceros.index');
    }

    public function index_prueba()
    {    
        return view('admin.pages.gestion_clientes.terceros.prueba_index');
    }

    public function mapaIndex()
    {    
        return view('admin.pages.gestion_clientes.terceros.mapa');
    }
}
