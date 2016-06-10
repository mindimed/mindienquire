<?php

class Booking_engine_setting extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'engine_id' => 'required',
		'prefix' => 'required'
	);
}
