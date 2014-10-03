<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
            $theme->setTitle('Copyright ©  2014 - Udeecondo');

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
            // $theme->asset()->usePath()->add('core', 'core.js');
            // $theme->asset()->add('jquery', 'vendor/jquery/jquery.min.js');
            // $theme->asset()->add('jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', array('jquery'));

            // Partial composer.
            // $theme->partialComposer('header', function($view)
            // {
            //     $view->with('auth', Auth::user());
            // });
            $theme->partialComposer('footer', function($view)
            {
                $view->with('project', Project::find(1));
            });

            
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
                $theme->asset()->usePath()->add('font', 'styles/fonts.css',array(), array('media' => 'screen, projection'));
                $theme->asset()->usePath()->add('main', 'styles/main.css',array('font'), array('media' => 'screen, projection'));
                $theme->asset()->usePath()->add('stylemenu', 'styles/stylemenu.css',array('font'), array('media' => 'screen'));
                $theme->asset()->usePath()->add('flexslider', 'styles/flexslider.css',array('font'), array('media' => 'screen'));
                $theme->asset()->usePath()->add('raccordion', 'styles/raccordion.css',array('font'));
                $theme->asset()->usePath()->add('vertical', 'styles/vertical.news.slider.css',array('font'));
                $theme->asset()->usePath()->add('fotorama', 'styles/fotorama.css',array('font'));
                $theme->asset()->usePath()->add('media', 'styles/media.css',array('font'), array('media' => 'screen, projection'));
                
   

                $theme->asset()->container('header')->usePath()->add('jquery', 'js/jquery.min.js');
                $theme->asset()->container('header')->usePath()->add('chrome', 'js/chrome.js', array('jquery'));
                $theme->asset()->container('header')->usePath()->add('menu', 'js/menu.js', array('jquery'));
                $theme->asset()->container('header')->usePath()->add('fotorama', 'js/fotorama.js', array('jquery'));

                $theme->asset()->container('footer')->usePath()->add('zaccordion', 'js/jquery.zaccordion.js');
                $theme->asset()->container('footer')->usePath()->add('flexslider', 'js/jquery.flexslider.js', array('zaccordion'));
                
                $theme->asset()->container('footer')->usePath()->add('slider', 'js/vertical.news.slider.js');
                

                
            }

        )

    )

);