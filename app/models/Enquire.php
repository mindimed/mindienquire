<?php

class Enquire extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'offer_id' => 'required',
		'room_id' => 'required',
		'offer_code' => 'required',
		'room_code' => 'required',
		'quotation_number' => 'required',
		'full_name' => 'required',
		'email' => 'required',
		'phone_number' => 'required',
		'mobile_number' => 'required',
		'address' => 'required',
		'city' => 'required',
		'postal_code' => 'required',
		'country' => 'required',
		'state' => 'required',
		'region' => 'required'
	);
}
