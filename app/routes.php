<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::any('/test', function()
{
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Accept, X-Requested-With');
    // without credentials we can use * for origin
    // header('Access-Control-Allow-Credentials: false');
    header('HTTP/1.1 200 OK', true);
    $facility = Facility::all();

    return Response::json($facility);

   
    //dd($facility->languages);
});

Route::group(
array(
    'prefix' => LaravelLocalization::setLocale(),
    'before' => 'LaravelLocalizationRedirectFilter' // LaravelLocalization filter
),
function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    

    Route::get('/', 'HomeController@index');
    
    Route::get('/project/detail', 'HomeController@detail');
    Route::get('/project/concept', 'HomeController@concept');
    Route::get('/project/facility', 'HomeController@facility');

    Route::get('/plan/master', 'HomeController@master');
    Route::get('/plan/floor', 'HomeController@floor');
    Route::get('/plan/floor/detail', 'HomeController@floor_detail');
    Route::get('/plan/room', 'HomeController@room');

    Route::get('/gallery', 'HomeController@gallery');

    Route::get('/news', 'HomeController@news');
    Route::get('/news/detail/{id}', 'HomeController@news_detail');

    Route::get('/progress', 'HomeController@progress');
    Route::get('/progress/detail/{id}', 'HomeController@progress_detail');

    Route::get('/contact', 'HomeController@contact');
    Route::get('/contact/job', 'HomeController@job');
});

Route::group(
array(
    'prefix' => 'backend',
    'before' => 'auth.sentry'
),
function()
{
    
    
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    // Route::get('/project/general', 'ProjectController@general');
    // Route::post('/project/modify', 'ProjectController@handleModify');
    Route::resource('projects', 'ProjectsController');
    Route::resource('facilities', 'FacilitiesController');
    Route::resource('units', 'UnitsController');
    Route::resource('news', 'NewsController');
    Route::resource('concepts', 'ConceptsController');
    Route::resource('galleries', 'GalleriesController');
    Route::resource('rooms', 'RoomsController');
    Route::resource('registers', 'RegistersController');
    Route::resource('jobs', 'JobsController');
    Route::resource('progresses', 'ProgressesController');
    Route::resource('slideshows', 'SlideshowsController');
 
});

Route::group(
array(
    'prefix' => 'backend',
),
function()
{
    Route::get('/', 'AuthController@index');
    Route::get('/create', 'AuthController@create');
    Route::post('/auth', 'AuthController@authenticate');
    Route::get('/logout', 'AuthController@logout');

    
});




Route::post('/register', 'HomeController@handleRegister');
Route::post('/contact', 'HomeController@handleContact');
