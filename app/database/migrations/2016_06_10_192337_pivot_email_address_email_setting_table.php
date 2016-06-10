<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotEmailAddressEmailSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_address_email_setting', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('email_address_id')->unsigned()->index();
			$table->integer('email_setting_id')->unsigned()->index();
			$table->foreign('email_address_id')->references('id')->on('email_addresses')->onDelete('cascade');
			$table->foreign('email_setting_id')->references('id')->on('email_settings')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('email_address_email_setting');
	}

}
