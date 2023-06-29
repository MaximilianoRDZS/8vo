<?php

namespace App\Models;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grupo extends Model{

    use HasFactory;

    //Se protege los datos para guardarlos en la base de datos
    protected $fillable = ['grupo'];

    //Se crea un metodo para la relacion de uno a muchos
    public function grupos(){
        
        //Se crea la relacion de uno a muchos
        return $this->hasMany(Alumno::class);
    }
}
