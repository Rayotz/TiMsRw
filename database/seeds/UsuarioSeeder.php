<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class UsuarioSeeder extends Seeder {
    public function run()
    {
        $usuario=Usuario::create(['usu_rut'=>'17896966-8','usu_nombre'=>'Wladimir',
            'usu_apellido'=>'Rodriguez','usu_correo'=>'correo@correo.cl',
            'usu_clave'=>'wlas123','usu_tipo'=>1]);
        $usuario=Usuario::create(['usu_rut'=>'18404255-k','usu_nombre'=>'Diego',
            'usu_apellido'=>'Alvarado','usu_correo'=>'correo@Diego.cl',
            'usu_clave'=>'diego123','usu_tipo'=>1]);
        $usuario=Usuario::create(['usu_rut'=>'17749951-k','usu_nombre'=>'Nicolas',
            'usu_apellido'=>'Oyarce','usu_correo'=>'correo@Nicolas.cl',
            'usu_clave'=>'nicolas123','usu_tipo'=>2]);
        $usuario=Usuario::create(['usu_rut'=>'17541628-5','usu_nombre'=>'Rene',
            'usu_apellido'=>'Sanchez','usu_correo'=>'Rene@correo.cl',
            'usu_clave'=>'rene123','usu_tipo'=>3]);
    }
}
