@foreach ($news as $tmp)
<div class="np-block">
    <a href="{{ action('HomeController@news_detail',$tmp->id) }}" class="more-btn news-more"><i class="mar"></i> อ่านต่อ</a>
    <a  href="{{ action('HomeController@news_detail',$tmp->id) }}"><div class="nt"><img src="{{ $tmp->image }}" /></div>
    <div class="ntoppic">{{ $tmp->pivot->name }}
        <span class="poston">ประกาศเมื่อ : {{ $tmp->created_at->toFormattedDateString() }}</span>
    </div>
</a>
<div class="clear"></div>
</div>
@endforeach