<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

    protected $table = 'alumnos';

    public static $rol=array(
        "a"=>'analista',
        "p"=>'programador',
        "d"=>'diseñador',
        "o"=>'otro'

    );

    protected $fillable =[
        'nombre','apellido',
        'rut',
        'rol',
        'email'
    ];



}
