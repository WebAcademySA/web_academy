<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscritosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscritos', function(Blueprint $table)
		{
			$table->increments('idinscrito');
            $table->integer('idcurinscritofor');
            $table->integer('idasiginscritofor');
            $table->integer('añoinscrito');
            $table->rememberToken();
			$table->timestamps();

            $table->foreign('idcurinscritofor')->references('idcurso')->on('cursos')->onDelete('cascade');
            $table->foreign('idasiginscritofor')->references('idasignatura')->on('asignaturas')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscritos');
	}

}
