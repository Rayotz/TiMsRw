<?php
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
//use App\Profesor;
class ProfesorSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create(['pro_tipo'=>2]);
    }
}