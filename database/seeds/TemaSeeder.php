<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tema;
class TemaSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tema = Tema::create(['tem_nombre_proyecto'=>'ISW'],['tem_ruta_proyecto'=>'null']);
        $tema = Tema::create(['tem_nombre_proyecto'=>'ISW2'],['tem_ruta_proyecto'=>'null']);
    }
}