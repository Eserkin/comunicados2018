<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolePermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_permission', function(Blueprint $table)
		{
			$table->integer('id_rol');
			$table->integer('id_permiso')->index('id_permiso');
			$table->integer('admin_asigna')->index('admin_asigna');
			$table->boolean('consultar')->default(0);
			$table->boolean('agregar')->default(0);
			$table->boolean('editar')->default(0);
			$table->boolean('eliminar')->default(0);
			$table->primary(['id_rol','id_permiso','admin_asigna']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_permission');
	}

}
