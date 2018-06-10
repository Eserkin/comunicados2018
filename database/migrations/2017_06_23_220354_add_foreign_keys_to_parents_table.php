<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parents', function(Blueprint $table)
		{
			$table->foreign('dni', 'parents_ibfk_1')->references('dni')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parents', function(Blueprint $table)
		{
			$table->dropForeign('parents_ibfk_1');
		});
	}

}
