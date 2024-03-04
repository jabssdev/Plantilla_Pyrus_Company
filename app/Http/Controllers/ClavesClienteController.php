<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClavesClienteController extends Controller
{
    public function index()
    {
        return view('admin.pages.gestion_claves.claves_cliente.index');
    }

    public function ocultos()
    {
        return view('admin.pages.gestion_claves.claves_cliente.ocultos');
    }
}
