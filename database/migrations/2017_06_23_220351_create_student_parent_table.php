<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentParentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_parent', function(Blueprint $table)
		{
			$table->integer('alumno_id');
			$table->integer('padre_id')->index('student_parent_parents');
			$table->primary(['alumno_id','padre_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_parent');
	}

}
