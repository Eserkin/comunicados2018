<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStudentParentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_parent', function(Blueprint $table)
		{
			$table->foreign('padre_id', 'student_parent_parents')->references('dni')->on('parents')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('alumno_id', 'student_parent_students')->references('dni')->on('students')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_parent', function(Blueprint $table)
		{
			$table->dropForeign('student_parent_parents');
			$table->dropForeign('student_parent_students');
		});
	}

}
