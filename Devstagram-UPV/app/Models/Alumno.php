<?php

namespace App\Models;

use App\Models\Grupo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model {
    use HasFactory;

    //se protegen los datos para guardarlos en la base de datos
    protected $fillable = [
        'nombre', 
        'apellidos',  
        'fecha_de_nacimiento', 
        'grupo_id'
    ];

    //Se crea un metodo para la relacion de uno a muchos
    public function grupos() {
        
        //Se crea la relacion de uno a muchos
        return $this->belongsTo(Grupo::class);
    }
}
