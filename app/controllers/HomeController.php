<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $language_id;

	function __construct(){
		parent::__construct();

		if(LaravelLocalization::getCurrentLocaleName() == 'Thai')
			$this->language_id = 1;
		else
			$this->language_id = 2;
	}
	


	public function index()
	{
		
		$slideshows = Slideshow::all();

        $view = array(
        	'slideshows' => $slideshows
        	);

        if (Session::has('message'))
		{
        	$this->theme->asset()->container('addon-inline')->writeScript('alert', '
			    $(function() {
			         alert("'.Session::get('message').'"); 
			    })
			');
        }

        return $this->theme->scope('home.index', $view)->render();

        


	}
	// Project
	public function detail()
	{

        $project = Language::find($this->language_id)->projects;
        $units = Language::find($this->language_id)->units;
        $rooms = Language::find($this->language_id)->rooms;
        $facilities = Language::find($this->language_id)->facilities;
        //dd($unit);

        $view = array(
        	'project' => $project,
        	'units' => $units,
        	'rooms' => $rooms,
        	'facilities' => $facilities
        	);

        return $this->theme->scope('information.detail', $view)->render();
	}

	public function concept()
	{

		$concepts = Concept::all();
        $view = array(
        	'concepts' => $concepts
        	);

        return $this->theme->scope('information.concept', $view)->render();
	}

	public function facility()
	{


        $view = array();

        return $this->theme->scope('information.facility', $view)->render();
	}

	//Plan
	public function master()
	{
		$this->theme->asset()->container('addon-css')->usePath()->add('tipsy', 'styles/tipsy.css');
        $this->theme->asset()->container('addon-js')->usePath()->add('tipsy', 'js/jquery.tipsy.js');
        $this->theme->asset()->container('addon-inline')->writeScript('tipsy', '
		    $(function() {
		         $(".tooltipe").tipsy({gravity: "e"});
		    })
		');


        $view = array();

        return $this->theme->scope('plan.master', $view)->render();
	}

	public function floor()
	{


        $view = array();
       
        $this->theme->asset()->container('addon-css')->usePath()->add('tipsy', 'styles/tipsy.css');
        $this->theme->asset()->container('addon-js')->usePath()->add('tipsy', 'js/jquery.tipsy.js');
        $this->theme->asset()->container('addon-inline')->writeScript('tipsy', '
		    $(function() {
		         $(".tooltipe").tipsy({gravity: "e"});
		    })
		');
        

        return $this->theme->scope('plan.floor', $view)->render();
	}

	public function floor_detail($id)
	{

		

	
		$floors = BuildingFloor::where('building_id',$id)->where('status',1)->orderBy('no','desc')->get();
		$building = Building::find($id);
        $view = array(
        	'floors' => $floors,
        	'building' => $building,
        	'language_id' => $this->language_id
        	);

        return $this->theme->scope('plan.floor-detail', $view)->render();
	}

	public function room()
	{

        $rooms = Language::find($this->language_id)->rooms;

        $view = array(
        	'rooms' => $rooms
        	);

        return $this->theme->scope('plan.room', $view)->render();
	}

	public function gallery()
	{

		$galleries = Gallery::all();
        $view = array(
        	'galleries' => $galleries
        	);

        return $this->theme->scope('gallery.index', $view)->render();
	}

	public function news()
	{

		$news = Language::find($this->language_id)->news;

        $view = array(
        	'news' => $news
        	);

        return $this->theme->scope('news.index', $view)->render();
	}

	public function news_detail($id)
	{
		$news = Language::find($this->language_id)->news->find($id);
        $view = array(
        	'news' => $news
        	);

        return $this->theme->scope('news.detail', $view)->render();
	}

	public function progress()
	{
		$progresses = Language::find($this->language_id)->progresses;

        $view = array(
        	'progresses' => $progresses
        	);

        return $this->theme->scope('progress.index', $view)->render();
	}

	public function progress_detail($id)
	{
		$progress = Language::find($this->language_id)->progresses->find($id);
		$images = ProgressImage::where('progress_id',$id)->get();

        $view = array(
        	'progress' => $progress,
        	'images' => $images
        	);

        return $this->theme->scope('progress.detail', $view)->render();
	}

	public function contact()
	{
		if (Session::has('message'))
		{
        	$this->theme->asset()->container('addon-inline')->writeScript('alert', '
			    $(function() {
			         alert("'.Session::get('message').'"); 
			    })
			');
        }

        $project = Language::find($this->language_id)->projects;

        $view = array(
        	'project' => $project
        	);

        return $this->theme->scope('contact.index', $view)->render();
	}

	public function job()
	{

		$jobs = Language::find($this->language_id)->jobs;

        $view = array(
        	'jobs' => $jobs
        	);

        $this->theme->asset()->container('addon-inline')->writeScript('Accordion1', '
		    var Accordion1 = new Spry.Widget.Accordion("Accordion1");
		');

		$this->theme->asset()->container('addon-css')->usePath()->add('SpryAccordion', 'SpryAssets/SpryAccordion.css');
        $this->theme->asset()->container('header')->usePath()->add('Spry', 'SpryAssets/SpryAccordion.js', array('fotorama'));
        return $this->theme->scope('contact.job', $view)->render();
	}

	public function test()
	{
		
		

        $view = array(
        	);

      

        return $this->theme->scope('plan.test', $view)->render();

        


	}

		public function test1()
	{
		
		

        $view = array(
        	);

      

        return $this->theme->scope('plan.test1', $view)->render();

        


	}

	public function handleRegister()
	{
		Register::create(Input::all());

		$data = Input::all();

		$data['info'] = Input::get('message');

		Mail::send('emails.register', $data, function($message)
		{
		    $message->to(Input::get('email'))->subject('Register Notification');
		});


		return Redirect::action('HomeController@index')->with('message','ได้รับข้อมูลเรียบร้อยแล้ว.');
	
	}

	public function handleContact()
	{
		Contact::create(Input::all());
		return Redirect::action('HomeController@contact')->with('message','ได้รับข้อมูลเรียบร้อยแล้ว.');
	
	}


}
