<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matricula', function(Blueprint $table)
		{
			$table->increments('id_matricula');
			$table->string('idcursofor');
			$table->integer('idalumnofor');
			$table->timestamps('fecha_matricula');
			$table->boolean('estadomatricula');


			$table->foreign('idcursofor')->references('grado')->on('curso')->onDelete('cascade');
			$table->foreign('idalumnofor')->references('nid')->on('alumno')->onDelete('cascade');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matricula');
	}

}
