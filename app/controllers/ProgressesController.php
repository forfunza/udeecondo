<?php

class ProgressesController extends \BaseController {

	/**
	 * Display a listing of progresses
	 *
	 * @return Response
	 */
	public function index()
	{
		$progresses = Progress::all();

		$view = array(
			'progresses' => $progresses
			);

		return $this->theme->scope('progresses.index', $view)->render();
	}

	/**
	 * Show the form for creating a new progress
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return $this->theme->scope('progresses.create', $progresses)->render();
	}

	/**
	 * Store a newly created progress in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Progress::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Progress::create($data);

		return Redirect::action('progresses@index')->with('message','');
	}

	/**
	 * Display the specified progress.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$progress = Progress::findOrFail($id);

		return $this->theme->scope('progresses.show', $progresses)->render();
	}

	/**
	 * Show the form for editing the specified progress.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$progress = Progress::find($id);

		$view = array(
			'progress' => $progress
			);
		
		return $this->theme->scope('progresses.edit', $view)->render();
	}

	/**
	 * Update the specified progress in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$progress = Progress::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Progress::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$progress->update($data);

		return Redirect::action('progresses@index')->with('message','');
	}

	/**
	 * Remove the specified progress from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Progress::destroy($id);

		return Redirect::action('progresses@index')->with('message','');
	}

}
