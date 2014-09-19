<?php

class RegistersController extends AdminController {

	/**
	 * Display a listing of registers
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

		
		$registers = Register::all();

		$view = array(
			'registers' => $registers
			);

		return $this->theme->scope('registers.index', $view)->render();
	}

	/**
	 * Show the form for creating a new register
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return $this->theme->scope('registers.create', $registers)->render();
	}

	/**
	 * Store a newly created register in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Register::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Register::create($data);

		return Redirect::action('registers@index')->with('message','');
	}

	/**
	 * Display the specified register.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$register = Register::findOrFail($id);

		$view = array(
			'register' => $register
			);

		return $this->theme->scope('registers.show', $view)->render();
	}

	/**
	 * Show the form for editing the specified register.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$register = Register::find($id);

		$view = array(
			'register' => $register
			);
		
		return $this->theme->scope('registers.edit', $view)->render();
	}

	/**
	 * Update the specified register in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$register = Register::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Register::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$register->update($data);

		return Redirect::action('registers@index')->with('message','');
	}

	/**
	 * Remove the specified register from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Register::destroy($id);

		return Redirect::action('registers@index')->with('message','');
	}

}
