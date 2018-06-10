<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('dni')->primary();
			$table->string('nombre', 191);
			$table->string('apellido', 150);
			$table->string('sexo', 40);
			$table->string('email', 191)->unique();
			$table->string('password', 191);
			$table->date('fecha_nacimiento');
			$table->integer('telefono');
			$table->integer('celular');
			$table->string('direccion');
			$table->string('localidad');
			$table->string('provincia', 150);
			$table->string('foto_url');
			$table->string('tipo', 40);
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
