<section>
    <div class="container ft xpadding-10">
        <div class="fc-1">
            <span>{{{ trans('footer.more_information') }}}</span>
            <ul>
                <li><a href="tel:{{ $project->tel1 }}">{{ $project->tel1 != '' ?  $project->tel1 : '-' }}</a></li>
                <li><a href="tel:{{ $project->tel2 }}">{{ $project->tel2 != '' ?  $project->tel2 : '-'}}</a></li>
            </ul>
        </div>
        <div class="fc-2">
            <span>{{{ trans('footer.follow') }}}</span>
            <ul>
                <li><a href="#" class="tw">twitter</a></li>
                <li><a href="#" class="fb">facebook</a></li>
                <li><a href="#" class="yt">youtube</a></li>
            </ul>
         
        </div>
        <div class="fc-3">
            <a href="{{ action('HomeController@index') }}">
                <img src="{{ asset('themes/default/assets/images/udeecondo-logo.png') }}" />
                <span class="fl">www.udeecondo.com</span>
            </a>
        </div>
    </div>
</section>
<footer>
    © 2014 T.K.H. Developmen Company Limited. All rights reserved
</footer>