<?php

class Booking_engine_detailsController extends BaseController {

	/**
	 * Booking_engine_detail Repository
	 *
	 * @var Booking_engine_detail
	 */
	protected $booking_engine_detail;

	public function __construct(Booking_engine_detail $booking_engine_detail)
	{
		$this->booking_engine_detail = $booking_engine_detail;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$booking_engine_details = $this->booking_engine_detail->all();

		return View::make('booking_engine_details.index', compact('booking_engine_details'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('booking_engine_details.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Booking_engine_detail::$rules);

		if ($validation->passes())
		{
			$this->booking_engine_detail->create($input);

			return Redirect::route('booking_engine_details.index');
		}

		return Redirect::route('booking_engine_details.create')
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
		$booking_engine_detail = $this->booking_engine_detail->findOrFail($id);

		return View::make('booking_engine_details.show', compact('booking_engine_detail'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$booking_engine_detail = $this->booking_engine_detail->find($id);

		if (is_null($booking_engine_detail))
		{
			return Redirect::route('booking_engine_details.index');
		}

		return View::make('booking_engine_details.edit', compact('booking_engine_detail'));
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
		$validation = Validator::make($input, Booking_engine_detail::$rules);

		if ($validation->passes())
		{
			$booking_engine_detail = $this->booking_engine_detail->find($id);
			$booking_engine_detail->update($input);

			return Redirect::route('booking_engine_details.show', $id);
		}

		return Redirect::route('booking_engine_details.edit', $id)
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
		$this->booking_engine_detail->find($id)->delete();

		return Redirect::route('booking_engine_details.index');
	}

}
