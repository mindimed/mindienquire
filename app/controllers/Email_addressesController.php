<?php

class Email_addressesController extends BaseController {

	/**
	 * Email_address Repository
	 *
	 * @var Email_address
	 */
	protected $email_address;

	public function __construct(Email_address $email_address)
	{
		$this->email_address = $email_address;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$email_addresses = $this->email_address->all();

		return View::make('email_addresses.index', compact('email_addresses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('email_addresses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Email_address::$rules);

		if ($validation->passes())
		{
			$this->email_address->create($input);

			return Redirect::route('email_addresses.index');
		}

		return Redirect::route('email_addresses.create')
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
		$email_address = $this->email_address->findOrFail($id);

		return View::make('email_addresses.show', compact('email_address'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$email_address = $this->email_address->find($id);

		if (is_null($email_address))
		{
			return Redirect::route('email_addresses.index');
		}

		return View::make('email_addresses.edit', compact('email_address'));
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
		$validation = Validator::make($input, Email_address::$rules);

		if ($validation->passes())
		{
			$email_address = $this->email_address->find($id);
			$email_address->update($input);

			return Redirect::route('email_addresses.show', $id);
		}

		return Redirect::route('email_addresses.edit', $id)
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
		$this->email_address->find($id)->delete();

		return Redirect::route('email_addresses.index');
	}

}
