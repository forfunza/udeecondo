<?php

class JobsController extends AdminController {

	/**
	 * Display a listing of jobs
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->theme->asset()->container('inline-script')->writeScript('EditableTable', '
	    	jQuery(document).ready(function() {
	       		EditableTable.init();
	    	});
		');

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
		$languages = Language::all();
		$view = array(
			'languages' => $languages
			);

		return $this->theme->scope('jobs.create', $view)->render();
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

		$job = Job::create($data);

		$job->languages()->sync($data['job_description']);

		return Redirect::action('JobsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
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
		$languages = Language::all();
		$view = array(
			'job' => $job,
			'languages' => $languages
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

		$job->languages()->sync($data['job_description']);

		return Redirect::action('JobsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
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

		return Redirect::action('JobsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

}
