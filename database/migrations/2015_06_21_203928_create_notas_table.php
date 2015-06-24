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
            $table->float('periodo1')->nullable();
            $table->float('periodo2')->nullable();
            $table->float('periodo3')->nullable();
            $table->float('periodo4')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idinsnotasfor')->references('idinscrito')->on('inscritos')->onDelete('cascade');
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
