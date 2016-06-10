<?php

class Email_templatesController extends BaseController {

	/**
	 * Email_template Repository
	 *
	 * @var Email_template
	 */
	protected $email_template;

	public function __construct(Email_template $email_template)
	{
		$this->email_template = $email_template;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$email_templates = $this->email_template->all();

		return View::make('email_templates.index', compact('email_templates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('email_templates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Email_template::$rules);

		if ($validation->passes())
		{
			$this->email_template->create($input);

			return Redirect::route('email_templates.index');
		}

		return Redirect::route('email_templates.create')
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
		$email_template = $this->email_template->findOrFail($id);

		return View::make('email_templates.show', compact('email_template'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$email_template = $this->email_template->find($id);

		if (is_null($email_template))
		{
			return Redirect::route('email_templates.index');
		}

		return View::make('email_templates.edit', compact('email_template'));
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
		$validation = Validator::make($input, Email_template::$rules);

		if ($validation->passes())
		{
			$email_template = $this->email_template->find($id);
			$email_template->update($input);

			return Redirect::route('email_templates.show', $id);
		}

		return Redirect::route('email_templates.edit', $id)
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
		$this->email_template->find($id)->delete();

		return Redirect::route('email_templates.index');
	}

}
