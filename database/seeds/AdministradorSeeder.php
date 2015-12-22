<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Administrador;
class AdministradorSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = Administrador::create(['adm_tipo'=>'3']);
    }
}