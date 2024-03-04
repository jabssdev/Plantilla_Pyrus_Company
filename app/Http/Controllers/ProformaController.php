<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProformaController extends Controller
{
    public function index()
    {
        return view('admin.pages.gestion_clientes.proformas.index');
    }

    public function createProforma()
    {
        return view('admin.pages.gestion_clientes.proformas.create');
    }
}
