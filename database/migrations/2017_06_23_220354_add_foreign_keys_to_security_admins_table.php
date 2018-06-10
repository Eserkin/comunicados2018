<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSecurityAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('security_admins', function(Blueprint $table)
		{
			$table->foreign('escuela_id', 'security_admins_ibfk_2')->references('id')->on('schools')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('security_admins', function(Blueprint $table)
		{
			$table->dropForeign('security_admins_ibfk_2');
		});
	}

}
