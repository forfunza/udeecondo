<?php

class ProgressesController extends AdminController {

	/**
	 * Display a listing of progresses
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

		$languages = Language::all();
		$view = array(
			'languages' => $languages
			);
		return $this->theme->scope('progresses.create',$view)->render();
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

		

		$image = 'http://placehold.it/697x465&text=Image';

		if(Input::hasFile('image')){
			
			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/progress/'.$image);
			
		}

		$progress = Progress::create(
			array(
					'image' => asset('farms/images/progress/'.$image.'')
				)
			);

		$progress->languages()->sync($data['progress_description']);

		return Redirect::action('ProgressesController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
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
		$languages = Language::all();

		$view = array(
			'progress' => $progress,
			'languages' => $languages
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

		if(Input::hasFile('image')){

			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/progress/'.$image);
			$progress->update(
			array(
					'image' => asset('farms/images/progress/'.$image.'')
				)
			);
		}

		

		$progress->languages()->sync($data['progress_description']);


		return Redirect::action('ProgressesController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
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

		return Redirect::action('ProgressesController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

}
