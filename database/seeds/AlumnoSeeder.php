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
		$alumno = Alumno::create(['nombre'=>'manuel pinto','rut'=>'17896966-6']);


	}

}
