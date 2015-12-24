<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

    protected $table = 'alumnos';

    public static $rol=array(
        "a"=>'analista',
        "p"=>'programador',
        "d"=>'dise�ador',
        "o"=>'otro'

    );

    protected $fillable =[
        'nombre','apellido',
        'rut',
        'rol',
        'email'
    ];



}
