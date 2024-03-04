<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClavesWHMController extends Controller
{
    public function index()
    {    
        return view('admin.pages.gestion_claves.claves_whm.index');
    }
}
