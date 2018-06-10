<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages_types', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tipo', 100);
			$table->boolean('es_general?');
			$table->boolean('requiere_firma?');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages_types');
	}

}
