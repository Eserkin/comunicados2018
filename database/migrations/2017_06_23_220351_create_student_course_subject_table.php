<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentCourseSubjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_course_subject', function(Blueprint $table)
		{
			$table->integer('alumno_id');
			$table->integer('materia_id')->index('student_course_subject_subject');
			$table->integer('curso_id')->index('student_course_subject_course');
			$table->boolean('asiste?');
			$table->string('justificativo_url', 250);
			$table->primary(['alumno_id','materia_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_course_subject');
	}

}
