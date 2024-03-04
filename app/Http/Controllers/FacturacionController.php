<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function index()
    {
        return view('admin.pages.contabilidad.facturacion.index');
    }

    public function createVenta()
    {
        return view('admin.pages.contabilidad.facturacion.venta');
    }

    public function notaCredito()
    {
        return view('admin.pages.contabilidad.facturacion.nota_credito');
    }
}
