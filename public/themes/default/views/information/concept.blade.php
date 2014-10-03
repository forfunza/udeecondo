<ul id="accordion-wrapper" class="accordion-wrapper">
	@foreach ($concepts as $concept)
	<li class="slide"><img src="{{ $concept->image }}" /></li>
	@endforeach
</ul>  