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
            $table->integer('idinscrito');
            $table->primary('idinscrito');
            $table->integer('idestuinscritofor');
            $table->integer('idasiginscritofor');
            $table->time('horainicio');
            $table->time('horafin');
            $table->string('diasemana');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idestuinscritofor')->references('nid')->on('alumnos')->onDelete('cascade');
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
