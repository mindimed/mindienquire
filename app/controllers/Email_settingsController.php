<?php

class Email_settingsController extends BaseController {

	/**
	 * Email_setting Repository
	 *
	 * @var Email_setting
	 */
	protected $email_setting;

	public function __construct(Email_setting $email_setting)
	{
		$this->email_setting = $email_setting;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$email_settings = $this->email_setting->all();

		return View::make('email_settings.index', compact('email_settings'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('email_settings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Email_setting::$rules);

		if ($validation->passes())
		{
			$this->email_setting->create($input);

			return Redirect::route('email_settings.index');
		}

		return Redirect::route('email_settings.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$email_setting = $this->email_setting->findOrFail($id);

		return View::make('email_settings.show', compact('email_setting'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$email_setting = $this->email_setting->find($id);

		if (is_null($email_setting))
		{
			return Redirect::route('email_settings.index');
		}

		return View::make('email_settings.edit', compact('email_setting'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Email_setting::$rules);

		if ($validation->passes())
		{
			$email_setting = $this->email_setting->find($id);
			$email_setting->update($input);

			return Redirect::route('email_settings.show', $id);
		}

		return Redirect::route('email_settings.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->email_setting->find($id)->delete();

		return Redirect::route('email_settings.index');
	}

}
