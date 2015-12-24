<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model {

    protected $table = '';
    protected $fillable =[

        'gru_numero',
        'gru_tamano_gru',
        'reate_at',
        'updated_at',
    ];

}
