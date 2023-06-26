<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //Prueba de funcionamiento
    public function store(){
        //Cerrar sesión con el helper auth a través del método logout
        auth()->logout();
        //Mandar al usuario a login
        return redirect()->route('login');
    }
}
