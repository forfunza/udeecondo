<?php

class ProjectsController extends AdminController {

	/**
	 * Display a listing of projects
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();

		$view = array(
			'projects' => $projects
			);

		return $this->theme->scope('projects.index', $view)->render();
	}

	/**
	 * Show the form for creating a new project
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return $this->theme->scope('projects.create', $projects)->render();
	}

	/**
	 * Store a newly created project in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Project::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Project::create($data);

		return Redirect::action('projects@index')->with('message','');
	}

	/**
	 * Display the specified project.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::findOrFail($id);

		return $this->theme->scope('projects.show', $projects)->render();
	}

	/**
	 * Show the form for editing the specified project.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::find($id);
		$languages = Language::all();

		$view = array(
			'project' => $project,
			'languages' => $languages
			);
		
		return $this->theme->scope('projects.edit', $view)->render();
	}

	/**
	 * Update the specified project in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Project::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Project::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$project->update($data);

		$project->languages()->sync($data['project_description']);

		return Redirect::action('ProjectsController@edit',1)->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Remove the specified project from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Project::destroy($id);

		return Redirect::action('projects@index')->with('message','');
	}

}
