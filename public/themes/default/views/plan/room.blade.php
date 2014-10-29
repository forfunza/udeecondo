<h1>{{{ trans('plan.room_type') }}}</h1>
<div class="news-holder cf">
    <ul class="news-headlines fld">
        @foreach ($rooms as $room)
        <li class="{{ $room->id == 1 ? 'selected' : ''}}">{{ $room->pivot->name }}</li>
        @endforeach
    </ul>
    <div class="news-preview">
        @foreach ($rooms as $room)
        <div class="news-content top-content">
            <h2 class="ct">{{ $room->pivot->name }}</h2>
            <a class="fancybox" href="{{ $room->image }}"><img src="{{ $room->image }}" /></a>
        </div>
        @endforeach
    </div>
    <div class="clear"></div>
    <a href="{{ action('HomeController@floor') }}" class="more-btn fbtn"><i class="marl"></i> {{{ trans('plan.back') }}}</a>
</div>