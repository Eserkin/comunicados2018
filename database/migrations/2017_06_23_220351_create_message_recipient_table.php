<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageRecipientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message_recipient', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('mensaje_id')->index('mensaje_id');
			$table->integer('recibe_dni')->index('recibe_dni');
			$table->boolean('fue_leido')->default(0);
			$table->boolean('fue_firmado')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message_recipient');
	}

}
