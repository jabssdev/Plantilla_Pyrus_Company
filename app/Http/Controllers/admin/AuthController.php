<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/home';
    // protected function redirectPath()
    // {
    //   if (Auth::user()->id_role==1) {
    //     return '/admin/home';
    //   } else if(Auth::user()->id_role==4){
    //     return '/admin/asistencias';
    //   } 
    //   else if(Auth::user()->id_role==2){
    //     return '/admin/homeSupervisores';
    //   } 
    // }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    protected function guard()
    {
        return Auth::guard('admins');
        //Auth::guard('admin')->user()->name
    }

    public function logout()
    {
        Auth::guard()->logout();
        return redirect('/administrador');

    }
}