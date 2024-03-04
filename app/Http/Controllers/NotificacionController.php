<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    public function index()
    {
        return view('admin.pages.gestion_clientes.notificaciones_pago.index');
    }
    public function createNotificacionPago()
    {
        return view('admin.pages.gestion_clientes.notificaciones_pago.create');
    }
}
