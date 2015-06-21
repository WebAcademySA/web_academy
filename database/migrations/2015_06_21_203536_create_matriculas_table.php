<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matriculas', function(Blueprint $table)
		{
            $table->increments('id_matricula');
            $table->string('idcursofor');
            $table->integer('idalumnofor');
            $table->timestamps('fecha_matricula');
            $table->boolean('estadomatricula');
            $table->rememberToken();

            $table->foreign('idcursofor')->references('grado')->on('cursos')->onDelete('cascade');
            $table->foreign('idalumnofor')->references('nid')->on('alumnos')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matriculas');
	}

}
