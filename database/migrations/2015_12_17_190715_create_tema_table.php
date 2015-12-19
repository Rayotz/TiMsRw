<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temas', function(Blueprint $table)
		{
			$table->integer('id_tem', 100)->unique();
			$table->string('titulo', 255);
			$table->boolean('estado_tema');
			$table->longText('descripcion');
			$table->primary(['rutid_tem']);
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
