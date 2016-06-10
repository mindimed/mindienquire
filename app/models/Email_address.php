<?php

class Email_address extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'toccbcc' => 'required',
		'email' => 'required',
		'full_name' => 'required'
	);
}
