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
    Route::get('/news/detail', 'HomeController@news_detail');

    Route::get('/progress', 'HomeController@progress');
    Route::get('/progress/detail', 'HomeController@progress_detail');

    Route::get('/contact', 'HomeController@contact');
    Route::get('/contact/job', 'HomeController@job');
});


Route::post('/register', 'HomeController@handleRegister');
