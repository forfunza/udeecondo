<div class="flexslider">
    <ul class="slides">
        <li><img src="{{ asset('themes/default/assets/images/slider/slide-1.jpg') }}" /></li>
        <li><img src="{{ asset('themes/default/assets/images/slider/slide-2.jpg') }}" /></li>
    </ul>
</div>
<div class="regis-form">
<form action="{{ action('HomeController@handleRegister') }}" method="POST">
	<h1>{{{ trans('home.register') }}}</h1>
	<span>{{{ trans('home.firstname') }}} :</span>
	<input type="text" name="firstname" required />
	<span>{{{ trans('home.lastname') }}} :</span>
	<input type="text" name="lastname" required />
	<span>{{{ trans('home.telephone') }}} :</span>
	<input type="tel" name="telephone" required />
	<span>{{{ trans('home.email') }}} :</span>
	<input type="email" name="email" required />
	<span>{{{ trans('home.message') }}} :</span>
	<textarea name="message"></textarea>
	<input type="submit" name="submit" value="{{{ trans('home.btn_submit') }}}" />
</form>
</div>