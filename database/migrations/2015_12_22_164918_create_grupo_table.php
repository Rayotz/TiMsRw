<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos', function (Blueprint $table) {
			$table->integer('gru_id');
			$table->integer('gru_numero');
			$table->integer('gru_tamano_grupo');
			$table->timestamps();
			$table->primary('gru_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('grupos');
	}

}
