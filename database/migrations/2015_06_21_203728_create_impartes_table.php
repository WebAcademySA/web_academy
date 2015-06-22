<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpartesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('impartes', function(Blueprint $table)
		{
            $table->increments('idimparte');
            $table->integer('idasigimpartefor');
            $table->integer('iddoceimpartefor');
            $table->integer('año');
            $table->boolean('estadoimparte')->default(true);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('iddoceimpartefor')->references('iddocente')->on('docentes')->onDelete('cascade');
            $table->foreign('idasigimpartefor')->references('idasignatura')->on('asignaturas')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('impartes');
	}

}
