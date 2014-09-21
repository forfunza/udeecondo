<?php

class GalleriesController extends AdminController {

	/**
	 * Display a listing of galleries
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

		$galleries = Gallery::all();

		$view = array(
			'galleries' => $galleries
			);

		return $this->theme->scope('galleries.index', $view)->render();
	}

	/**
	 * Show the form for creating a new gallery
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return $this->theme->scope('galleries.create')->render();
	}

	/**
	 * Store a newly created gallery in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Gallery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if(Input::hasFile('image')){
			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/galleries/'.$image);
		}

		Gallery::create(
			array(
				'image' => asset('farms/images/galleries/'.$image.'')
			)
		);

		return Redirect::action('GalleriesController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Display the specified gallery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$gallery = Gallery::findOrFail($id);

		return $this->theme->scope('galleries.show', $galleries)->render();
	}

	/**
	 * Show the form for editing the specified gallery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gallery = Gallery::find($id);

		$view = array(
			'gallery' => $gallery
			);
		
		return $this->theme->scope('galleries.edit', $view)->render();
	}

	/**
	 * Update the specified gallery in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$gallery = Gallery::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Gallery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		

		if(Input::hasFile('image')){
			$image = 'http://placehold.it/697x465&text=Image';
			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/galleries/'.$image);
			$gallery->update(
			array(
					'image' => asset('farms/images/galleries/'.$image.'')
				)
			);
		}

		
		return Redirect::action('GalleriesController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Remove the specified gallery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Gallery::destroy($id);

		return Redirect::action('GalleriesController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

}
