<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos', function (Blueprint $table) {
			$table->string('nombre',30);
			$table->string('apellido',100);
			$table->string('rut',12)->unique();
			$table->char('rol')->default('NULL');
			$table->string('email',50)->nullable();
			$table->increments('id');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('alumno');
	}

}
