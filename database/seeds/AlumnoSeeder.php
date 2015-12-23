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
        $alumnoss=Alumno::create(['alu_rol'=>'progmador','alu_grupo'=>'1','alu_tipo'=>2]);
        $alumnoss=Alumno::create(['alu_rol'=>'tester','alu_grupo'=>'1','alu_tipo'=>1]);
        $alumnoss=Alumno::create(['alu_rol'=>'diseñador','alu_grupo'=>'1','alu_tipo'=>3]);
        $alumnoss=Alumno::create(['alu_rol'=>'jefe','alu_grupo'=>'1','alu_tipo'=>3]);

    }
}