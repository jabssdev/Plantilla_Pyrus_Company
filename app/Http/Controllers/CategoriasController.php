<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        return view('admin.pages.gestion_servicios.categorias.index');
    }

    public function subcategoria()
    {
        return view('admin.pages.gestion_servicios.categorias.subcategoria');
    }
}
