<div class="pgl">
{{ $progress->pivot->description }}
</div>
<div class="pgr">
 <div id="slider-pg" class="flexslider-pg">
<ul class="slides">
  @foreach ($images as $img)
  <li><img src="{{ $img->images }}" /></li>
  @endforeach
</ul>
</div>
@if($images)
<div id="carousel-pg" class="flexslider-pg">
<ul class="slides">
	@foreach ($images as $img)
  <li><img src="{{ $img->images }}" /></li>
  @endforeach
</ul>
</div>
@endif
</div>