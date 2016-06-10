<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enquiries', function(Blueprint $table) {
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
			$table->datetime('day_in');
			$table->datetime('day_out');
			$table->datetime('checkin_date')->nullable();
			$table->integer('quantity')->nullable();
			$table->integer('adult')->nullable();
			$table->integer('children')->nullable();
			$table->integer('infant')->nullable();
			$table->string('airport_name')->nullable();
			$table->string('airport_location')->nullable();
			$table->string('flight_number')->nullable();
			$table->datetime('arrival_time')->nullable();
			$table->string('other_transport')->nullable();
			$table->text('comment');
			$table->integer('info_special_check')->default(0);
			$table->text('info_special')->nullable();
			$table->string('how_did_enquire')->default('other');
			$table->string('status');
			$table->double('price')->nullable();
			$table->string('currency')->nullable();
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
		Schema::drop('enquiries');
	}

}
