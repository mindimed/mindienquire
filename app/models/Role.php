<?php

class Role extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'code' => 'required',
		'is_super_user' => 'required'
	);
}
