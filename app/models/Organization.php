<?php

class Organization extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'code' => 'required'
	);
}
