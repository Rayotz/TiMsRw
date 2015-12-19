<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos', function(Blueprint $table)
		{
			$table->string('nombre_alumno',255);
			$table->string('rut_alumno',12)->unique();
			$table->string('clave_alumno',12);
			$table->string('email')->unique();
			$table->string('rol_primario',12);
			$table->string('rol_secundario',12);
			$table->timestamps();
			$table->primary(['rut','email']);
			$table->integer('id_grup')->unsigned();
			$table->foreign('id_grup')->references('id_grupo')->on('grupo');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnos');
	}

}
