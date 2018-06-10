<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolePermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role_permission', function(Blueprint $table)
		{
			$table->foreign('id_rol', 'role_permission_ibfk_1')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_permiso', 'role_permission_ibfk_2')->references('id')->on('permissions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('admin_asigna', 'role_permission_ibfk_3')->references('dni')->on('security_admins')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role_permission', function(Blueprint $table)
		{
			$table->dropForeign('role_permission_ibfk_1');
			$table->dropForeign('role_permission_ibfk_2');
			$table->dropForeign('role_permission_ibfk_3');
		});
	}

}
