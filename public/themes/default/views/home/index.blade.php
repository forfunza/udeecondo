<div class="flexslider">
    <ul class="slides">
    	@if(!empty($slideshows))
    	@foreach ($slideshows as $slide)
    		<li><img src="{{ $slide->image }}" /></li>
    	@endforeach
    	@endif
    </ul>
</div>
<div class="regis-form">
{{ Form::open(array('action' => array('HomeController@handleRegister'), 'method' => 'post')) }}
	<h1>{{{ trans('home.register') }}}</h1>
	<span>{{{ trans('home.firstname') }}} :</span>
	<input type="text" name="firstname" required />
	<span>{{{ trans('home.lastname') }}} :</span>
	<input type="text" name="lastname" required />
	<span>{{{ trans('home.telephone') }}} :</span>
	<input type="text" name="tel" />
	<span>{{{ trans('home.email') }}} :</span>
	<input type="text" name="email" required />
	<span>{{{ trans('home.message') }}} :</span>
	<textarea name="message"></textarea>
	<input type="submit" name="submit" value="{{{ trans('home.btn_submit') }}}" />
{{ form::close() }}
</div>