<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos', function(Blueprint $table)
		{
			$table->integer('id_grupo',100)->unique();
			$table->integer('id_tem',100);
			$table->timestamps();
			$table->primary(['id_grupo']);
			$table->foreign('id_tem')->references('id_tema')->on('tema');
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
