<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos', function(Blueprint $table)
		{
			$table->integer('rut',100)->unique();
			$table->string('nombre_profesor',255);
			$table->string('mail_profesor',255);
			$table->string('email')->unique();
			$table->timestamps();
			$table->primary(['rut'],['email']);
			$table->string('clave_alumno',12);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
