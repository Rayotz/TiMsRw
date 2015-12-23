<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    protected $fillable=['usu_rut','usu_nombre','usu_apellido','usu_correo','usu_clave'
        ,'usu_tipo'];

}
