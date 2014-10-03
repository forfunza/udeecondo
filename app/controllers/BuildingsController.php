<?php

class BuildingsController extends \AdminController {

	/**
	 * Display a listing of buildings
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

		$buildings = Building::all();

		$view = array(
			'buildings' => $buildings
			);

		return $this->theme->scope('buildings.index', $view)->render();
	}

	/**
	 * Show the form for creating a new building
	 *
	 * @return Response
	 */
	public function create()
	{
		$languages = Language::all();

		$view = array(
			'languages' => $languages
			);
		
		return $this->theme->scope('buildings.create',$view)->render();
	}

	/**
	 * Store a newly created building in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Building::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$building = Building::create($data);

		$building->languages()->sync($data['building_description']);

		return Redirect::action('BuildingsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Display the specified building.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$building = Building::findOrFail($id);

		return $this->theme->scope('buildings.show', $buildings)->render();
	}

	/**
	 * Show the form for editing the specified building.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$building = Building::find($id);
		$floors = BuildingFloor::where('building_id',$id)->get();

		$view = array(
			'building' => $building,
			'floors' => $floors
			);
		
		return $this->theme->scope('buildings.edit', $view)->render();
	}

	/**
	 * Update the specified building in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$building = Building::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Building::$rules);

		//dd($data);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if(Input::hasFile('image')){
			foreach ($data['image'] as $key => $img) {
				if($img){
				$floor = BuildingFloor::findOrFail($key);
				$dt = new DateTime;
				$image = $dt->getTimestamp().'-'. sha1($img->getClientOriginalName()).'.'.$img->getClientOriginalExtension();
				Image::make($img->getRealPath())->save('farms/images/'.$image);
				$floor->update([
					'image' => asset('farms/images/'.$image)
					]);
				}
			}
			
		}

		return Redirect::action('BuildingsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Remove the specified building from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Building::destroy($id);

		return Redirect::action('BuildingsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

}
