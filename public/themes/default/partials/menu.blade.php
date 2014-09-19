<section>
    <div class="container">
        <div class="logo-left"><a href="{{ action('HomeController@index') }}"><img src="{{ asset('themes/default/assets/images/udeecondo-logo.png') }}" /></a></div>
        <!--Main menu-->
        <div class="mobile-main-menu"><a id="touch-menu" class="mobile-menu" href="#">{{{ trans('menu.menu') }}}</a></div>
        <nav>
            <ul class="menu">
                <li><a href="{{ action('HomeController@index') }}" class="{{ Request::segment(2) == '' ? 'active' : ''  }}">{{{ trans('menu.home') }}}</a></li>
                <li><a class="{{ Request::segment(2) == 'project' ? 'active' : ''  }}">{{{ trans('menu.information') }}} <span class="caret"></span></a>
                <ul class="sub-menu">
                    <li><a href="{{ action('HomeController@detail') }}">{{{ trans('menu.detail') }}}</a></li>
                    <li><a href="{{ action('HomeController@concept') }}">{{{ trans('menu.concept') }}}</a></li>
                    <li><a href="{{ action('HomeController@facility') }}" class="last">{{{ trans('menu.facility') }}}</a></li>
                </ul>
            </li>
            <li><a class="{{ Request::segment(2) == 'plan' ? 'active' : ''  }}">{{{ trans('menu.plan') }}} <span class="caret"></span></a>
            <ul class="sub-menu">
                <li><a href="{{ action('HomeController@master') }}">{{{ trans('menu.project_plan') }}}</a></li>
                <li><a href="{{ action('HomeController@floor') }}">{{{ trans('menu.floor_plan') }}}</a></li>
                <li><a href="{{ action('HomeController@room') }}" class="last">{{{ trans('menu.room_plan') }}}</a></li>
            </ul>
        </li>
        <li><a class="{{ Request::segment(2) == 'gallery' ? 'active' : ''  }}" href="{{ action('HomeController@gallery') }}">{{{ trans('menu.gallery') }}}</a></li>
        <li><a class="{{ Request::segment(2) == 'news' ? 'active' : ''  }}" href="{{ action('HomeController@news') }}">{{{ trans('menu.news') }}}</a></li>
        <li><a class="{{ Request::segment(2) == 'progress' ? 'active' : ''  }}" href="{{ action('HomeController@progress') }}">{{{ trans('menu.project_progress') }}}</a></li>
        <li><a class="{{ Request::segment(2) == 'contact' ? 'active' : ''  }}" href="{{ action('HomeController@contact') }}" class="last">{{{ trans('menu.contact') }}}</a></li>
    </ul>
</nav>
<!---->
</div>
</section>