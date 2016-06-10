<?php

class Booking_engine extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'code' => 'required',
		'url' => 'required',
		'method' => 'required'
	);
}
