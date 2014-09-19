<?php

class UnitsController extends AdminController {

	/**
	 * Display a listing of units
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

		$units = Unit::all();

		$view = array(
			'units' => $units
			);

		return $this->theme->scope('units.index', $view)->render();
	}

	/**
	 * Show the form for creating a new unit
	 *
	 * @return Response
	 */
	public function create()
	{
		$languages = Language::all();
		
		$view = array(
			'languages' => $languages
			);
		
		return $this->theme->scope('units.create', $view)->render();
	}

	/**
	 * Store a newly created unit in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Unit::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$unit = Unit::create($data);

		$unit->languages()->sync($data['unit_description']);

		return Redirect::action('UnitsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Display the specified unit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$unit = Unit::findOrFail($id);

		return $this->theme->scope('units.show', $units)->render();
	}

	/**
	 * Show the form for editing the specified unit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$unit = Unit::find($id);
		$languages = Language::all();

		$view = array(
			'unit' => $unit,
			'languages' => $languages
			);
		
		return $this->theme->scope('units.edit', $view)->render();
	}

	/**
	 * Update the specified unit in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$unit = Unit::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Unit::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$unit->update($data);

		$unit->languages()->sync($data['unit_description']);

		return Redirect::action('UnitsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Remove the specified unit from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Unit::destroy($id);

		return Redirect::action('UnitsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

}
