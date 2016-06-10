<?php

class Offer extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'room_id' => 'required',
		'booking_engine_detail_id' => 'required',
		'name' => 'required',
		'description' => 'required',
		'active' => 'required',
		'is_booking_connected' => 'required',
		'is_broken' => 'required'
	);
}
