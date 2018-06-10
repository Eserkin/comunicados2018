<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentEvaluationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_evaluation', function(Blueprint $table)
		{
			$table->foreign('evaluacion_id', 'student_evaluation_evaluations')->references('id')->on('evaluations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('alumno_id', 'student_evaluation_students')->references('dni')->on('students')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_evaluation', function(Blueprint $table)
		{
			$table->dropForeign('student_evaluation_evaluations');
			$table->dropForeign('student_evaluation_students');
		});
	}

}
