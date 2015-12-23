<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('AdministradorSeeder');
		$this->call('AlumnoSeeder');
		$this->call('GrupoSeeder');
		$this->call('ProfesorSeeder');
		$this->call('TemaSeeder');
		$this->call('TipoSeeder');
		$this->call('UsuarioSeeder');
	}

}
