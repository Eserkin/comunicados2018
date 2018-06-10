<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('school_staff', function(Blueprint $table)
		{
			$table->integer('dni')->primary();
			$table->integer('n_legajo');
			$table->date('fecha_alta');
			$table->boolean('activo?');
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
		Schema::drop('school_staff');
	}

}
