<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentEvaluationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_evaluation', function(Blueprint $table)
		{
			$table->integer('alumno_id');
			$table->integer('evaluacion_id')->index('student_evaluation_evaluations');
			$table->integer('calificacion');
			$table->boolean('esta_aprobado?');
			$table->timestamp('fecha')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->primary(['alumno_id','evaluacion_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_evaluation');
	}

}
