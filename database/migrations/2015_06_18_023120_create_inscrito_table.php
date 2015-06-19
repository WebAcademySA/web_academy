<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscritoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscrito', function(Blueprint $table)
		{
			$table->integer('idinscrito');
            $table->primary('idinscrito');
            $table->integer('idestuinscritofor');
            $table->integer('idasiginscritofor');
            $table->time('horainicio');
            $table->time('horafin');
			$table->timestamps();

            $table->foreign('idestuinscritofor')->references('nid')->on('alumno')->onDelete('cascade');
            $table->foreign('idasiginscritofor')->references('idasignatura')->on('asignatura')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscrito');
	}

}
