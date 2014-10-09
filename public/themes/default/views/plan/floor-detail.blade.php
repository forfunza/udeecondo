<h1>{{ $building->languages->first()->pivot->name }}</h1>
<div class="news-holder cf">
    <ul class="news-headlines fld">
        @foreach ($floors as $floor)
            <li class="{{ $floor->no == '1' ? 'selected' : '' }}">ชั้น {{ $floor->no }}</li>
        @endforeach
    
    </ul>
    
    <div class="news-preview">
        @foreach ($floors as $floor)
            
            <div class="news-content top-content">
            <h2 class="ct">: ชั้น {{ $floor->no }}</h2>
            <a class="fancybox" rel="gallery1" href="{{ $floor->image }}">
    <img src="{{ $floor->image }}" alt="" />
</a>
        </div>
        @endforeach
        
    </div>
    <div class="clear"></div>
    <div class="floor-web">
    <a href="{{ action('HomeController@floor') }}" class="more-btn fbtn"><i class="marl"></i> กลับไปเลือกอาคาร</a>
    </div>
    <div class="floor-mobi">
        <a href="{{ action('HomeController@floor') }}" class="more-btn fbtn"><i class="marl"></i> กลับไปเลือกอาคาร</a>
    </div>
</div>



