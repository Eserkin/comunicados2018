<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSecurityAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('security_admins', function(Blueprint $table)
		{
			$table->integer('dni')->primary();
			$table->string('nombre', 150);
			$table->string('apellido', 150);
			$table->string('email', 150);
			$table->integer('telefono');
			$table->integer('escuela_id')->index('escuela_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('security_admins');
	}

}
