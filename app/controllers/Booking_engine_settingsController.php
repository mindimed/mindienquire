<?php

class Booking_engine_settingsController extends BaseController {

	/**
	 * Booking_engine_setting Repository
	 *
	 * @var Booking_engine_setting
	 */
	protected $booking_engine_setting;

	public function __construct(Booking_engine_setting $booking_engine_setting)
	{
		$this->booking_engine_setting = $booking_engine_setting;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$booking_engine_settings = $this->booking_engine_setting->all();

		return View::make('booking_engine_settings.index', compact('booking_engine_settings'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('booking_engine_settings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Booking_engine_setting::$rules);

		if ($validation->passes())
		{
			$this->booking_engine_setting->create($input);

			return Redirect::route('booking_engine_settings.index');
		}

		return Redirect::route('booking_engine_settings.create')
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
		$booking_engine_setting = $this->booking_engine_setting->findOrFail($id);

		return View::make('booking_engine_settings.show', compact('booking_engine_setting'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$booking_engine_setting = $this->booking_engine_setting->find($id);

		if (is_null($booking_engine_setting))
		{
			return Redirect::route('booking_engine_settings.index');
		}

		return View::make('booking_engine_settings.edit', compact('booking_engine_setting'));
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
		$validation = Validator::make($input, Booking_engine_setting::$rules);

		if ($validation->passes())
		{
			$booking_engine_setting = $this->booking_engine_setting->find($id);
			$booking_engine_setting->update($input);

			return Redirect::route('booking_engine_settings.show', $id);
		}

		return Redirect::route('booking_engine_settings.edit', $id)
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
		$this->booking_engine_setting->find($id)->delete();

		return Redirect::route('booking_engine_settings.index');
	}

}
