<?php

class Booking_enginesController extends BaseController {

	/**
	 * Booking_engine Repository
	 *
	 * @var Booking_engine
	 */
	protected $booking_engine;

	public function __construct(Booking_engine $booking_engine)
	{
		$this->booking_engine = $booking_engine;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$booking_engines = $this->booking_engine->all();

		return View::make('booking_engines.index', compact('booking_engines'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('booking_engines.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Booking_engine::$rules);

		if ($validation->passes())
		{
			$this->booking_engine->create($input);

			return Redirect::route('booking_engines.index');
		}

		return Redirect::route('booking_engines.create')
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
		$booking_engine = $this->booking_engine->findOrFail($id);

		return View::make('booking_engines.show', compact('booking_engine'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$booking_engine = $this->booking_engine->find($id);

		if (is_null($booking_engine))
		{
			return Redirect::route('booking_engines.index');
		}

		return View::make('booking_engines.edit', compact('booking_engine'));
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
		$validation = Validator::make($input, Booking_engine::$rules);

		if ($validation->passes())
		{
			$booking_engine = $this->booking_engine->find($id);
			$booking_engine->update($input);

			return Redirect::route('booking_engines.show', $id);
		}

		return Redirect::route('booking_engines.edit', $id)
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
		$this->booking_engine->find($id)->delete();

		return Redirect::route('booking_engines.index');
	}

}
