<?php

class AuthController extends AdminController {

	/**
	 * Display a listing of concepts
	 *
	 * @return Response
	 */
	public function index()
	{
		// return $this->theme->scope('auth.index')->render();
		return Response::view('auth.index');
	}

	public function authenticate()
	{
		try
		{
		    // Login credentials
		    $credentials = array(
		        'email'    => Input::get('username'),
		        'password' => Input::get('password'),
		    );

		    // Authenticate the user
		    $user = Sentry::authenticate($credentials, false);
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    return Redirect::action('AuthController@index')->with('message','Login field is required');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    return Redirect::action('AuthController@index')->with('message','Password field is required.');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
		    return Redirect::action('AuthController@index')->with('message','Wrong password, try again.');
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    return Redirect::action('AuthController@index')->with('message','User was not found.');
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
		    return Redirect::action('AuthController@index')->with('message','User is not activated.');
		}

		// The following is only required if the throttling is enabled
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
		    return Redirect::action('AuthController@index')->with('message','User is suspended.');
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
		    return Redirect::action('AuthController@index')->with('message','User is banned.');
		}

		return Redirect::action('RegistersController@index');
	}

	public function logout()
	{
		Sentry::logout();
		return Redirect::action('AuthController@index');
	}	


	public function create()
	{
		try
		{
		    // Create the user
		    $user = Sentry::createUser(array(
		        'email'     => 'admin',
		        'password'  => 'admin',
		        'activated' => true,
		    ));

		    
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    echo 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    echo 'Password field is required.';
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
		    echo 'User with this login already exists.';
		}
		catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
		{
		    echo 'Group was not found.';
		}
	}

}