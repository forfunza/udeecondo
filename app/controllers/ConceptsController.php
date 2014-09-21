<?php

class ConceptsController extends AdminController {

	/**
	 * Display a listing of concepts
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

		$concepts = Concept::all();

		$view = array(
			'concepts' => $concepts,
			'languages' => $languages
			);

		return $this->theme->scope('concepts.index', $view)->render();
	}

	/**
	 * Show the form for creating a new Concept
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return $this->theme->scope('concepts.create')->render();
	}

	/**
	 * Store a newly created Concept in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Concept::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if(Input::hasFile('image')){
			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/concepts/'.$image);
		}

		$concept = Concept::create(
			array(
					'image' => asset('farms/images/concepts/'.$image.'')
				)
			);

		return Redirect::action('ConceptsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Display the specified Concept.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$Concept = Concept::findOrFail($id);

		return $this->theme->scope('concepts.show', $concepts)->render();
	}

	/**
	 * Show the form for editing the specified Concept.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Concept = Concept::find($id);

		$view = array(
			'concept' => $Concept
			);
		
		return $this->theme->scope('concepts.edit', $view)->render();
	}

	/**
	 * Update the specified Concept in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$concept = Concept::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Concept::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		

		if(Input::hasFile('image')){
			$image = 'http://placehold.it/697x465&text=Image';

			$dt = new DateTime;
			$image = $dt->getTimestamp().'.'.Input::file('image')->getClientOriginalExtension();
			Image::make(Input::file('image')->getRealPath())->save('farms/images/concepts/'.$image);

			$concept->update(
			array(
					'image' => asset('farms/images/concepts/'.$image.'')
				)
			);
		}

		

		return Redirect::action('ConceptsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

	/**
	 * Remove the specified Concept from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Concept::destroy($id);

		return Redirect::action('ConceptsController@index')->with('message','<strong>ยินดีด้วย!</strong> แก้ไขข้อมูลเรียบร้อยแล้ว.');
	}

}
