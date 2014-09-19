<div class="fotorama" data-nav="thumbs" data-thumbheight="68">
	@foreach ($galleries as $gallery) 
	<a href="{{ $gallery->image }}" data-caption="Udeecondo"><img src="{{ $gallery->image }}" /></a>
	@endforeach
	
</div>