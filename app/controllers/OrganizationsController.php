<?php

class OrganizationsController extends BaseController {

	/**
	 * Organization Repository
	 *
	 * @var Organization
	 */
	protected $organization;

	public function __construct(Organization $organization)
	{
		$this->organization = $organization;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$organizations = $this->organization->all();

		return View::make('organizations.index', compact('organizations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('organizations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Organization::$rules);

		if ($validation->passes())
		{
			$this->organization->create($input);

			return Redirect::route('organizations.index');
		}

		return Redirect::route('organizations.create')
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
		$organization = $this->organization->findOrFail($id);

		return View::make('organizations.show', compact('organization'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$organization = $this->organization->find($id);

		if (is_null($organization))
		{
			return Redirect::route('organizations.index');
		}

		return View::make('organizations.edit', compact('organization'));
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
		$validation = Validator::make($input, Organization::$rules);

		if ($validation->passes())
		{
			$organization = $this->organization->find($id);
			$organization->update($input);

			return Redirect::route('organizations.show', $id);
		}

		return Redirect::route('organizations.edit', $id)
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
		$this->organization->find($id)->delete();

		return Redirect::route('organizations.index');
	}

}
