<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('grado', 150);
			$table->string('nivel', 100);
			$table->string('aula', 20);
			$table->string('dia_cursada', 250);
			$table->time('hora_cursada');
			$table->string('turno', 150)->index('courses_schedules');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
