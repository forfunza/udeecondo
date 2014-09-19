<?php

class JobsController extends \BaseController {

	/**
	 * Display a listing of jobs
	 *
	 * @return Response
	 */
	public function index()
	{
		$jobs = Job::all();

		$view = array(
			'jobs' => $jobs
			);

		return $this->theme->scope('jobs.index', $view)->render();
	}

	/**
	 * Show the form for creating a new job
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return $this->theme->scope('jobs.create', $jobs)->render();
	}

	/**
	 * Store a newly created job in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Job::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Job::create($data);

		return Redirect::action('jobs@index')->with('message','');
	}

	/**
	 * Display the specified job.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$job = Job::findOrFail($id);

		return $this->theme->scope('jobs.show', $jobs)->render();
	}

	/**
	 * Show the form for editing the specified job.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$job = Job::find($id);

		$view = array(
			'job' => $job
			);
		
		return $this->theme->scope('jobs.edit', $view)->render();
	}

	/**
	 * Update the specified job in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$job = Job::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Job::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$job->update($data);

		return Redirect::action('jobs@index')->with('message','');
	}

	/**
	 * Remove the specified job from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Job::destroy($id);

		return Redirect::action('jobs@index')->with('message','');
	}

}
