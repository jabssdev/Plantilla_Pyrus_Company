<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresosController extends Controller
{
    public function index()
    {    
        return view('admin.pages.contabilidad.ingresos_egresos.index');
    }
}
