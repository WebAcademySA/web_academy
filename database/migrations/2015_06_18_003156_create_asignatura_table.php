<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignatura', function(Blueprint $table)
		{
			$table->integer('idasignatura');
            $table->primary('idasignatura');
			$table->string('nombreasig', 50);
			$table->boolean('estadoasig')->default(true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignatura');
	}

}
