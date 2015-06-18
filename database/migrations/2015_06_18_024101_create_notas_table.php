<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notas', function(Blueprint $table)
		{
			$table->integer('idnotas');
            $table->primary('idnotas');
            $table->integer('idinsnotasfor');
            $table->integer('calificacion');
            $table->integer('periodo');
			$table->timestamps();

            $table->foreign('idinsnotasfor')->references('idinscrito')->on('inscrito')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notas');
	}

}
