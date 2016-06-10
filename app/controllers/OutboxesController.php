<?php

class OutboxesController extends BaseController {

	/**
	 * Outbox Repository
	 *
	 * @var Outbox
	 */
	protected $outbox;

	public function __construct(Outbox $outbox)
	{
		$this->outbox = $outbox;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$outboxes = $this->outbox->all();

		return View::make('outboxes.index', compact('outboxes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('outboxes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Outbox::$rules);

		if ($validation->passes())
		{
			$this->outbox->create($input);

			return Redirect::route('outboxes.index');
		}

		return Redirect::route('outboxes.create')
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
		$outbox = $this->outbox->findOrFail($id);

		return View::make('outboxes.show', compact('outbox'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$outbox = $this->outbox->find($id);

		if (is_null($outbox))
		{
			return Redirect::route('outboxes.index');
		}

		return View::make('outboxes.edit', compact('outbox'));
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
		$validation = Validator::make($input, Outbox::$rules);

		if ($validation->passes())
		{
			$outbox = $this->outbox->find($id);
			$outbox->update($input);

			return Redirect::route('outboxes.show', $id);
		}

		return Redirect::route('outboxes.edit', $id)
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
		$this->outbox->find($id)->delete();

		return Redirect::route('outboxes.index');
	}

}
