<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('modalidad', 150)->nullable();
			$table->string('nivel', 150)->nullable();
			$table->integer('numero')->nullable();
			$table->string('nombre', 150);
			$table->string('direccion', 250);
			$table->string('localidad', 250);
			$table->string('provincia', 200);
			$table->integer('telefono')->nullable();
			$table->integer('fax')->nullable();
			$table->string('email', 150);
			$table->string('pagina_web', 100)->nullable();
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
		Schema::drop('schools');
	}

}
