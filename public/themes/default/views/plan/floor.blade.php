<h1>{{{ trans('plan.plan') }}}</h1>
<span class="mtip">{{{ trans('plan.addition_text') }}}</span>
<div class="mtp">
    <span class="main-master"><img src="{{ asset('themes/default/assets/images/plan/masterplan.png') }}" /></span>
    <a href="{{ action('HomeController@floor_detail',1) }}"><span class="floor-1 tooltipe" title="{{{ trans('plan.b1') }}}"></span></a>
    <a href="{{ action('HomeController@floor_detail',2) }}"><span class="floor-2 tooltipe" title="{{{ trans('plan.b2') }}}"></span></a>
    <a href="{{ action('HomeController@floor_detail',3) }}"><span class="floor-3 tooltipe" title="{{{ trans('plan.b3') }}}"></span></a>
    <a href="{{ action('HomeController@floor_detail',4) }}"><span class="floor-4 tooltipe" title="{{{ trans('plan.b4') }}}"></span></a>
    <a href="{{ action('HomeController@floor_detail',5) }}"><span class="floor-5 tooltipe" title="{{{ trans('plan.b5') }}}"></span></a>
    <a href="{{ action('HomeController@floor_detail',6) }}"><span class="floor-6 tooltipe" title="{{{ trans('plan.b6') }}}"></span></a>
    <a href="{{ action('HomeController@floor_detail',7) }}"><span class="floor-7 tooltipe" title="{{{ trans('plan.b7') }}}"></span></a>
    <a href="{{ action('HomeController@floor_detail',8) }}"><span class="floor-8 tooltipe" title="{{{ trans('plan.b8') }}}"></span></a>
     <span class="arrm"><img src="{{ asset('themes/default/assets/images/arr-mtp.jpg') }}" /></span>
     
</div>
<div class="clear"></div>
<div class="floor-mobi map-box">
	<a href="{{ action('HomeController@test') }}" class="fade-1">{{{ trans('plan.phase') }}} 1 <br/><img src="{{ asset('themes/default/assets/images/mobi-master-2.png') }}" /></a>
	<a href="{{ action('HomeController@test1') }}" class="fade-2">{{{ trans('plan.phase') }}} 2 <img src="{{ asset('themes/default/assets/images/mobi-master-1.png') }}" /></a>
	<div class="clear"></div>
</div>