<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStaffRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staff_role', function(Blueprint $table)
		{
			$table->foreign('dni', 'staff_role_ibfk_1')->references('dni')->on('school_staff')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('rol_id', 'staff_role_ibfk_2')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('staff_role', function(Blueprint $table)
		{
			$table->dropForeign('staff_role_ibfk_1');
			$table->dropForeign('staff_role_ibfk_2');
		});
	}

}
