<?php

class FacilitiesController extends AdminController {

	/**
	 * Display a listing of facilities
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

		$facilities = Facility::all();

		$view = array(
			'facilities' => $facilities
			);

		return $this->theme->scope('facilities.index', $view)->render();
	}

	/**
	 * Show the form for creating a new facility
	 *
	 * @return Response
	 */
	public function create()
	{
		$languages = Language::all();

		$view = array(
			'languages' => $languages
			);

		return $this->theme->scope('facilities.create',$view)->render();
	}

	/**
	 * Store a newly created facility in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Facility::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		//dd($data);
		$image = 'http://placehold.it/697x465&text=Image';

		if(Input::hasFile('image')){
			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/'.$image);
		}

		$facility = Facility::create(
			array(
					'image' => asset('farms/images/'.$image.'')
				)
			);

		$facility->languages()->sync($data['facility_description']);

		return Redirect::action('FacilitiesController@index')->with('message', '<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');

	}

	/**
	 * Display the specified facility.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$facility = Facility::findOrFail($id);

		return $this->theme->scope('facilities.show', $facility)->render();
	}

	/**
	 * Show the form for editing the specified facility.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$facility = Facility::find($id);
		$languages = Language::all();

		$view = array(
			'facility' => $facility,
			'languages' => $languages
			);
		
		return $this->theme->scope('facilities.edit', $view)->render();
	}

	/**
	 * Update the specified facility in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$facility = Facility::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Facility::$rules);

		if ($validator->fails())
		{
			//echo 1;
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$image = 'http://placehold.it/697x465&text=Image';

		if(Input::hasFile('image')){
			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/'.$image);
		}

		$facility->update(
			array(
					'image' => asset('farms/images/'.$image.'')
				)
			);

		$facility->languages()->sync($data['facility_description']);

		//$facility->update($data);

		return Redirect::action('FacilitiesController@index')->with('message', '<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');

	}

	/**
	 * Remove the specified facility from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Facility::destroy($id);

		return Redirect::to('backend/facilities')->with('message', '<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');

	}

}
