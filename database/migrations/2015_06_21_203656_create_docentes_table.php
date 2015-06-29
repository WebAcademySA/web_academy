<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docentes', function(Blueprint $table)
		{
            $table->integer('iddocente');
            $table->primary('iddocente');
            $table->string('primer_nombre', 20);
            $table->string('segundo_nombre', 20);
            $table->string('primer_apellido', 20);
            $table->string('segundo_apellido', 20);
            $table->string('titulo', 20);
            $table->string('nivel', 20);
            $table->string('sexo');
            $table->string('email', 40);
            $table->integer('telefono');
            $table->string('direccion', 30);
            $table->rememberToken();
            $table->boolean('estado')->default(true);
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
		Schema::drop('docentes');
	}

}
