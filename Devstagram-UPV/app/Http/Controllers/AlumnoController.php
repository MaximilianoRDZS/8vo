<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller {
    
    //Se muestran todos los alumnos
    public function index() {
        $alumnos = Alumno::all();
        $grupos = Grupo::all();
        return view('alumnos', ['alumnos' => $alumnos, 'grupos' => $grupos]);
    }

    //Se guardan los alumnos
    public function store(Request $request) {

        //Se validan los datos del alumno
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nacimiento' => 'required',
            'grupo_id' => 'required'
        ]);

        //Guardamos los datos en la Base de Datos de alumnos
        Alumno::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'grupo_id' => $request->grupo_id
        ]);

        //Redireccionamos a la vista de alumnos
        return redirect()->route('alumnos');
    }

}
