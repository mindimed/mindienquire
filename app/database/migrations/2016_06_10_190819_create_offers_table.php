<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offers', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('hotel_id')->unsigned();
			$table->integer('room_id')->unsigned();
			$table->integer('booking_engine_detail_id')->unsigned();
			$table->string('name');
			$table->string('description')->nullable();
			$table->integer('active')->default(1);
			$table->integer('is_booking_connected')->default(0);
			$table->integer('is_broken')->default(0);
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
		Schema::drop('offers');
	}

}
