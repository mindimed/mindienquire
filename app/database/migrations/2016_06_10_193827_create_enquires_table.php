<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnquiresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enquires', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('hotel_id')->unsigned();
			$table->integer('offer_id')->unsigned();
			$table->integer('room_id')->unsigned();
			$table->string('offer_code');
			$table->string('room_code');
			$table->string('quotation_number')->unique();
			$table->string('full_name');
			$table->string('email');
			$table->string('phone_number')->nullable();
			$table->string('mobile_number')->nullable();
			$table->string('address')->nullable();
			$table->string('city');
			$table->string('postal_code')->nullable();
			$table->string('country');
			$table->string('state')->nullable();
			$table->string('region')->nullable();
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
		Schema::drop('enquires');
	}

}
