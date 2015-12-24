<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Alumno;
class AlumnoSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'nombre'=> 'wlas',
            'apellido'=> 'rodri',
            'rut'=> '17896966-8',
            'rol'=> 'p',
            'email'=>'wlas@ubiobio.cl',
        ]);


    }
}