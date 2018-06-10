<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentCourseSubjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_course_subject', function(Blueprint $table)
		{
			$table->foreign('curso_id', 'student_course_subject_course')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('alumno_id', 'student_course_subject_student')->references('dni')->on('students')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('materia_id', 'student_course_subject_subject')->references('id')->on('subjects')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_course_subject', function(Blueprint $table)
		{
			$table->dropForeign('student_course_subject_course');
			$table->dropForeign('student_course_subject_student');
			$table->dropForeign('student_course_subject_subject');
		});
	}

}
