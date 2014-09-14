<header>
	<div class="language">
		<ul>
			@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
			<li>
            <a class="{{ LaravelLocalization::getCurrentLocaleName() == $properties['name'] ? 'active' : '' }}" rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                {{ strtoupper($localeCode) }}
            </a>
        </li>
			@endforeach
		</ul>
	</div>
	<div class="tkh-logo"></div>
</header>
