<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Grupo;
class GrupoSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupo = Grupo::create(['gru_id'=>1,'gru_numero'=>1,'gru_tamano_grupo'=>1]);
        $grupo = Grupo::create(['gru_id'=>2,'gru_numero'=>2,'gru_tamano_grupo'=>2]);
    }
}