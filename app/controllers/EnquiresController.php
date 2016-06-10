<?php

class EnquiresController extends BaseController {

	/**
	 * Enquire Repository
	 *
	 * @var Enquire
	 */
	protected $enquire;

	public function __construct(Enquire $enquire)
	{
		$this->enquire = $enquire;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$enquires = $this->enquire->all();

		return View::make('enquires.index', compact('enquires'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('enquires.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Enquire::$rules);

		if ($validation->passes())
		{
			$this->enquire->create($input);

			return Redirect::route('enquires.index');
		}

		return Redirect::route('enquires.create')
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
		$enquire = $this->enquire->findOrFail($id);

		return View::make('enquires.show', compact('enquire'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$enquire = $this->enquire->find($id);

		if (is_null($enquire))
		{
			return Redirect::route('enquires.index');
		}

		return View::make('enquires.edit', compact('enquire'));
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
		$validation = Validator::make($input, Enquire::$rules);

		if ($validation->passes())
		{
			$enquire = $this->enquire->find($id);
			$enquire->update($input);

			return Redirect::route('enquires.show', $id);
		}

		return Redirect::route('enquires.edit', $id)
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
		$this->enquire->find($id)->delete();

		return Redirect::route('enquires.index');
	}

}
