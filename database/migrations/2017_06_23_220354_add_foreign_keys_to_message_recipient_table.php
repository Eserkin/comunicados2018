<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessageRecipientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('message_recipient', function(Blueprint $table)
		{
			$table->foreign('mensaje_id', 'message_recipient_ibfk_1')->references('id')->on('messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('recibe_dni', 'message_recipient_ibfk_2')->references('dni')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('message_recipient', function(Blueprint $table)
		{
			$table->dropForeign('message_recipient_ibfk_1');
			$table->dropForeign('message_recipient_ibfk_2');
		});
	}

}
