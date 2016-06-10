<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('OrganizationsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('OffersTableSeeder');
		$this->call('RoomsTableSeeder');
		$this->call('Booking_enginesTableSeeder');
		$this->call('Booking_engine_settingsTableSeeder');
		$this->call('Booking_engine_detailsTableSeeder');
		$this->call('Email_templatesTableSeeder');
		$this->call('Email_addressesTableSeeder');
		$this->call('Email_settingsTableSeeder');
		$this->call('OutboxesTableSeeder');
		$this->call('EnquiresTableSeeder');
	}

}
