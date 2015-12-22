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
        $tema = Tema::create(['tip_id'=>'1'],['tem_nombre_proyecto'=>'ISW'],['tem_ruta_proyecto'=>'null']);
        $tema = Tema::create(['tip_id'=>'2'],['tem_nombre_proyecto'=>'ISW2'],['tem_ruta_proyecto'=>'null']);
    }
}