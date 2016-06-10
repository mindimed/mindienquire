<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOutboxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outboxes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('hotel_id')->unsigned();
			$table->integer('enquire_id')->unsigned();
			$table->string('status');
			$table->text('sent_to');
			$table->text('sent_cc')->nullable();
			$table->text('sent_bcc')->nullable();
			$table->text('message');
			$table->string('title');
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
		Schema::drop('outboxes');
	}

}
