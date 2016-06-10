<?php

class Room extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'name' => 'required',
		'code' => 'required',
		'description' => 'required'
	);
}
