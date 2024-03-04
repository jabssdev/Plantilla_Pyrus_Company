<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {    
        return view('admin.pages.gestion_servicios.catalogo_servicios.index');
    }
}
