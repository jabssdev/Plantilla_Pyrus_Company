<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NcuentaController extends Controller
{
    public function index()
    {    
        return view('admin.pages.contabilidad.n_cuenta.index');
    }
}
