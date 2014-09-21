<?php

class RoomsController extends AdminController {

	/**
	 * Display a listing of rooms
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

		$languages = Language::all();

		$rooms = Room::all();

		$view = array(
			'rooms' => $rooms,
			'languages' => $languages
			);

		return $this->theme->scope('rooms.index', $view)->render();
	}

	/**
	 * Show the form for creating a new room
	 *
	 * @return Response
	 */
	public function create()
	{
		$languages = Language::all();

		$view = array(
			'languages' => $languages
			);

		return $this->theme->scope('rooms.create', $view)->render();
	}

	/**
	 * Store a newly created room in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Room::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$image = 'http://placehold.it/697x465&text=Image';

		if(Input::hasFile('image')){
			
			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/rooms/'.$image);
			
		}

		$room = Room::create(
			array(
					'image' => asset('farms/images/rooms/'.$image.'')
				)
			);
		

		$room->languages()->sync($data['room_description']);

		return Redirect::action('RoomsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Display the specified room.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$room = Room::findOrFail($id);

		return $this->theme->scope('rooms.show', $rooms)->render();
	}

	/**
	 * Show the form for editing the specified room.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$room = Room::find($id);
		$languages = Language::all();

		$view = array(
			'room' => $room,
			'languages' => $languages
			);
		
		return $this->theme->scope('rooms.edit', $view)->render();
	}

	/**
	 * Update the specified room in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$room = Room::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Room::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		

		if(Input::hasFile('image')){
			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/rooms/'.$image);
			$room->update(
			array(
					'image' => asset('farms/images/rooms/'.$image.'')
				)
			);
		}

		

		$room->languages()->sync($data['room_description']);

		return Redirect::action('RoomsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Remove the specified room from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Room::destroy($id);

		return Redirect::action('RoomsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

}
