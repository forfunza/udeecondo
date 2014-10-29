<h1>{{ $building->languages->first()->pivot->name }}</h1>
<div class="news-holder cf">
    <ul class="news-headlines fld">
        @foreach ($floors as $floor)
            @if($language_id == 1)
            <li class="{{ $floor->no == '1' ? 'selected' : '' }}">{{{ trans('plan.floor') }}} {{ $floor->no }}</li>
            @elseif($language_id == 2)
            <li class="{{ $floor->no == '1' ? 'selected' : '' }}">{{ trans('plan.f'.$floor->no) }}</li>
            @endif
        @endforeach
    
    </ul>
    
    <div class="news-preview">
        @foreach ($floors as $floor)
            
            <div class="news-content top-content">
            <h2 class="ct">: {{{ trans('plan.floor') }}} {{ $floor->no }}</h2>
            <a class="fancybox" rel="gallery1" href="{{ $floor->image }}">
    <img src="{{ $floor->image }}" alt="" />
</a>
        </div>
        @endforeach
        
    </div>
    <div class="clear"></div>
    <div class="floor-web">
    <a href="{{ action('HomeController@floor') }}" class="more-btn fbtn"><i class="marl"></i> {{{ trans('plan.back') }}}</a>
    </div>
    <div class="floor-mobi">
        <a href="{{ action('HomeController@floor') }}" class="more-btn fbtn"><i class="marl"></i> {{{ trans('plan.back') }}}</a>
    </div>
</div>



