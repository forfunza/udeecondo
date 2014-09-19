<?php

class SlideshowsController extends \BaseController {

	/**
	 * Display a listing of slideshows
	 *
	 * @return Response
	 */
	public function index()
	{
		$slideshows = Slideshow::all();

		$view = array(
			'slideshows' => $slideshows
			);

		return $this->theme->scope('slideshows.index', $view)->render();
	}

	/**
	 * Show the form for creating a new slideshow
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return $this->theme->scope('slideshows.create', $slideshows)->render();
	}

	/**
	 * Store a newly created slideshow in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Slideshow::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Slideshow::create($data);

		return Redirect::action('slideshows@index')->with('message','');
	}

	/**
	 * Display the specified slideshow.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$slideshow = Slideshow::findOrFail($id);

		return $this->theme->scope('slideshows.show', $slideshows)->render();
	}

	/**
	 * Show the form for editing the specified slideshow.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$slideshow = Slideshow::find($id);

		$view = array(
			'slideshow' => $slideshow
			);
		
		return $this->theme->scope('slideshows.edit', $view)->render();
	}

	/**
	 * Update the specified slideshow in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$slideshow = Slideshow::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Slideshow::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$slideshow->update($data);

		return Redirect::action('slideshows@index')->with('message','');
	}

	/**
	 * Remove the specified slideshow from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Slideshow::destroy($id);

		return Redirect::action('slideshows@index')->with('message','');
	}

}
