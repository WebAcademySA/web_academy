<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id');
            $table->primary('id');
            $table->string('usuario')->unique();
            $table->string('password');
            $table->string('remember_token');
            $table->string('tipo')->default('usuario');
			$table->timestamps();

            $table->foreign('id')->references('iddocente')->on('docente')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario');
	}

}
