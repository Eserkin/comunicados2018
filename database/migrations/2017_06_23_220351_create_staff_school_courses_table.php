<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffSchoolCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff_school_courses', function(Blueprint $table)
		{
			$table->integer('dni');
			$table->integer('escuela_id')->index('escuela_id');
			$table->integer('curso_id')->index('curso_id');
			$table->primary(['dni','escuela_id','curso_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staff_school_courses');
	}

}
