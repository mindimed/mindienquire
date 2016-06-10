<?php

class Email_template extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'template' => 'required'
	);
}
