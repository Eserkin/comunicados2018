<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('messages', function(Blueprint $table)
		{
			$table->foreign('user_envia', 'messages_ibfk_1')->references('dni')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('escuela_id', 'messages_ibfk_2')->references('id')->on('schools')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('mensaje_tipo_id', 'messages_type')->references('id')->on('messages_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('messages', function(Blueprint $table)
		{
			$table->dropForeign('messages_ibfk_1');
			$table->dropForeign('messages_ibfk_2');
			$table->dropForeign('messages_type');
		});
	}

}
