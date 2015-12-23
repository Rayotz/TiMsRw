<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model {
    protected $table = 'temas';

    protected $fillable=['tem_id','tem_nombre_proyecto','tem_ruta_proyecto'];

}
