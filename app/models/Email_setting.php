<?php

class Email_setting extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'template_id' => 'required',
		'title' => 'required',
		'body' => 'required',
		'status' => 'required'
	);
}
