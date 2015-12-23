<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function (Blueprint $table) {
			$table->integer('usu_rut');
			$table->string('usu_nombre',12);
			$table->string('usu_apellido',20);
			$table->string('usu_correo',60);
			$table->string('usu_clave',20);
			$table->integer('usu_tipo');
			$table->timestamps();
			$table->primary('usu_rut');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('usuarios');
	}

}
