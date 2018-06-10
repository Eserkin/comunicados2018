<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStaffSchoolCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staff_school_courses', function(Blueprint $table)
		{
			$table->foreign('dni', 'staff_school_courses_ibfk_1')->references('dni')->on('school_staff')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('escuela_id', 'staff_school_courses_ibfk_2')->references('id')->on('schools')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('curso_id', 'staff_school_courses_ibfk_3')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('staff_school_courses', function(Blueprint $table)
		{
			$table->dropForeign('staff_school_courses_ibfk_1');
			$table->dropForeign('staff_school_courses_ibfk_2');
			$table->dropForeign('staff_school_courses_ibfk_3');
		});
	}

}
