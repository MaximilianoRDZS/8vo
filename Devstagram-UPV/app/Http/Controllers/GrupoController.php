<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller {
    
    //Aqui se van a mostrar todos los grupos
    public function index(){

        $grupos = Grupo::all();
        return view('grupos', ['grupos' => $grupos]);
    }

    //Aqui se van a guardar los grupos
    public function store(Request $request) {

        //Se validan los datos del grupo
        $request->validate([
            'grupo' => 'required'
        ]);

        //Guardamos los datos en la Base de Datos de grupos
        Grupo::create([
            'grupo' => $request->grupo
        ]);

        //Redireccionamos a la vista de grupos
        return redirect()->route('grupos');
    }
}
