<?php

class Enquire extends Eloquent {
	protected $guarded = array();
	protected $table = 'enquiries';

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
		'region' => 'required',
		'day_in' => 'required',
		'day_out' => 'required',
		'checkin_date' => 'required',
		'quantity' => 'required',
		'adult' => 'required',
		'children' => 'required',
		'infant' => 'required',
		'airport_name' => 'required',
		'airport_location' => 'required',
		'flight_number' => 'required',
		'arrival_time' => 'required',
		'other_transport' => 'required',
		'comment' => 'required',
		'info_special_check' => 'required',
		'info_special' => 'required',
		'how_did_enquire' => 'required',
		'status' => 'required',
		'price' => 'required',
		'currency' => 'required'
	);
}
