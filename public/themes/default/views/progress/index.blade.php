@if(!empty($progresses))
@foreach ($progresses as $progress)
<div class="np-block">
	<a href="{{ action('HomeController@progress_detail',$progress->id) }}" class="more-btn news-more"><i class="mar"></i> อ่านต่อ</a>
	<a  href="{{ action('HomeController@progress_detail',$progress->id) }}"><div class="nt"><img src="{{ $progress->image }}" /></div>
    <span class="pgon">{{ $progress->created_at->format('M Y') }}</span>
    <div class="ntoppic">{{ $progress->pivot->name }}</div>
    </a>
    <div class="clear"></div>
</div>
@endforeach
@endif

<!-- <div class="np-nav">
	<ul>
    	<li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&gt;</a></li>
        <li><a href="#">Last &gt;&gt;</a></li>
    </ul>
</div> -->