<div class="cml">
	<a id="map1" href="{{ asset('themes/default/assets/images/map-udee.png') }}"><img src="{{ asset('themes/default/assets/images/map-udee.png') }}" alt="" /></a>
    <ul>
    	<li><a href="https://www.google.com/maps/d/viewer?mid=zL__n7pq94wg.kA0G0twairc8" target="_blank"><span class="google-map"></span></a></li>
        <li><a id="map2" href="{{ asset('themes/default/assets/images/b-map.png') }}"><span class="zoom-map"></span></a></li>
        <!-- <li><a onclick="openWin()"><span class="print-map"></span></a></li> -->

    </ul>

    <div class="clear"></div>
</div>
<div class="cmr">
	<div class="cb">
    	<h1>{{ $project->first()->pivot->name }}</h1>
        <div class="cd">
        	<span>{{ $project->first()->pivot->address }}</span>
            <span> {{{ trans('contact.tel') }}}. {{ $project->first()->tel1 }} , {{ $project->first()->tel2 }}</span>
            <span> {{{ trans('contact.fax') }}}. 038 514 064 </span>     
            <span>{{{ trans('contact.email') }}} : <a href="#">{{ $project->first()->email }}</a></span>
            <span> {{{ trans('contact.time') }}} : 9.00 {{{ trans('contact.am') }}}-18.00 {{{ trans('contact.pm') }}}</span> 
         </div>
    </div>
    <div class="cb">
    	<h1>{{{ trans('contact.more') }}}</h1>
        {{ Form::open(array('action' => array('HomeController@handleContact'), 'method' => 'post')) }}
        	<input type="text" name="firstname" class="st" placeholder="{{{ trans('contact.name') }}} :" required />
            <input type="text" name="lastname" class="st" placeholder="{{{ trans('contact.lname') }}} :" required />
            <input type="text" name="tel" class="st" placeholder="{{{ trans('contact.tel') }}} :" />
            <input type="text" name="email" class="st" placeholder="{{{ trans('contact.email') }}} :" required />
            <input type="text" name="topic"  placeholder="{{{ trans('contact.subject') }}} :" required />
            <textarea name="message" placeholder="{{{ trans('contact.message') }}} :" required ></textarea>
            <input type="submit" name="submit" value="{{{ trans('contact.submit') }}}" />
            <input type="reset" name="reset" value="{{{ trans('contact.cancel') }}}" />
        {{ form::close() }}
        <div class="clear"></div>
    </div>
    <div class="job"><a href="{{ action('HomeController@job') }}"><i class="jmem"></i>{{{ trans('contact.job') }}}<i class="jar"></i></a></div>
</div>

<script type="text/javascript">

$(document).ready(function() {
    $("#map2").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
         type: 'image'
    });

   
    $("#map1").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
         type: 'image'
    });

    
});

</script>