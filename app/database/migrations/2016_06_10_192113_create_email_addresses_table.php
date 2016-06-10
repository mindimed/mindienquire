<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('hotel_id')->unsigned();
			$table->string('toccbcc');
			$table->string('email');
			$table->string('full_name');
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
		Schema::drop('email_addresses');
	}

}
