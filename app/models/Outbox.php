<?php

class Outbox extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'hotel_id' => 'required',
		'enquire_id' => 'required',
		'status' => 'required',
		'sent_to' => 'required',
		'sent_cc' => 'required',
		'sent_bcc' => 'required',
		'message' => 'required',
		'title' => 'required'
	);
}
