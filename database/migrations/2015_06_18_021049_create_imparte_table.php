<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImparteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imparte', function(Blueprint $table)
		{
			$table->integer('idimparte');
            $table->primary('idimparte');
            $table->integer('idasigimpartefor');
            $table->integer('iddoceimpartefor');
            $table->integer('año');
            $table->boolean('estadoimparte')->default(true);
			$table->timestamps();

            $table->foreign('iddoceimpartefor')->references('iddocente')->on('docente')->onDelete('cascade');
            $table->foreign('idasigimpartefor')->references('idasignatura')->on('asignatura')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imparte');
	}

}
