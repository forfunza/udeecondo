@foreach ($news as $tmp)
<div class="np-block">
    <a href="{{ action('HomeController@news_detail',$tmp->id) }}" class="more-btn news-more"><i class="mar"></i> {{{ trans('news.read') }}}</a>
    <a  href="{{ action('HomeController@news_detail',$tmp->id) }}"><div class="nt"><img src="{{ $tmp->image }}" /></div>
    <div class="ntoppic">{{ $tmp->pivot->name }}
        <span class="poston">{{{ trans('news.date') }}} : {{ $tmp->created_at->toFormattedDateString() }}</span>
    </div>
</a>
<div class="clear"></div>
</div>
@endforeach