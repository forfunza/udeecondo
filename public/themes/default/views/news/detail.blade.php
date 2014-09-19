<div class="nmp"><img src="{{ $news->image }}" /></div>
<h1 class="mp">{{ $news->pivot->name }}</h1>
<div class="ncontent">
	{{ $news->pivot->description }}
</div>
<div class="inn-npnav">
    <div class="poston">ประกาศเมื่อ : {{ $news->created_at->toFormattedDateString() }}</div>
    <a href="{{ action('HomeController@news') }}" class="more-btn"><i class="marl"></i> กลับ</a>
    <div class="clear"></div>
</div>
