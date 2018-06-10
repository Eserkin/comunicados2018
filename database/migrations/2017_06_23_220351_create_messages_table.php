<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('asunto', 200);
			$table->string('mensaje', 250);
			$table->integer('mensaje_padre_id')->index('mensaje_padre_id');
			$table->integer('mensaje_tipo_id')->index('messages_type');
			$table->integer('user_envia')->index('user_envia');
			$table->integer('escuela_id')->index('escuela_id');
			$table->date('fecha_creacion');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages');
	}

}
