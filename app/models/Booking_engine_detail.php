<?php

class Booking_engine_detail extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'setting_id' => 'required',
		'param_name' => 'required',
		'param_value' => 'required',
		'is_static' => 'required'
	);
}
