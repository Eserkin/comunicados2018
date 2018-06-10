<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEvaluationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evaluations', function(Blueprint $table)
		{
			$table->foreign('materia_id', 'evaluations_subjects')->references('id')->on('subjects')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('evaluations', function(Blueprint $table)
		{
			$table->dropForeign('evaluations_subjects');
		});
	}

}
