<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff_role', function(Blueprint $table)
		{
			$table->integer('dni');
			$table->integer('rol_id')->index('rol_id');
			$table->timestamps();
			$table->primary(['dni','rol_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staff_role');
	}

}
