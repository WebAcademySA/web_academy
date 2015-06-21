<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('alumnos', function(Blueprint $table)
        {
            $table->integer('nid');
            $table->primary('nid');
            $table->string('primer_nombre', 20);
            $table->string('segundo_nombre', 20);
            $table->string('primer_apellido', 20);
            $table->string('segundo_apellido', 20);
            $table->integer('telefono');
            $table->string('sexo', 1);
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
		Schema::drop('alumnos');
	}

}
