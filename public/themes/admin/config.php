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
            $theme->setTitle('Udeecondo - Administrator Panel');

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
            
            $theme->partialComposer('header', function($view)
            {
                $view->with('auth', Sentry::getUser());
            });
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
                //Core CSS
                $theme->asset()->container('core-css')->usePath()->add('bootstrap', 'bs3/css/bootstrap.min.css');
                $theme->asset()->container('core-css')->usePath()->add('bootstrap-reset', 'css/bootstrap-reset.css', array('bootstrap'));
                $theme->asset()->container('core-css')->usePath()->add('font-awesome', 'font-awesome/css/font-awesome.css', array('bootstrap'));
                $theme->asset()->container('core-css')->usePath()->add('bootstrap-fileupload', 'js/bootstrap-fileupload/bootstrap-fileupload.css', array('bootstrap'));
                $theme->asset()->container('core-css')->usePath()->add('bootstrap-wysihtml5', 'js/bootstrap-wysihtml5/bootstrap-wysihtml5.css', array('bootstrap'));
                

                //Custom styles for this template
                $theme->asset()->container('core-css')->usePath()->add('style', 'css/style.css', array('bootstrap'));
                $theme->asset()->container('core-css')->usePath()->add('style-responsive', 'css/style-responsive.css', array('bootstrap'));
                
                //<!--Core js-->
                $theme->asset()->container('core-js')->usePath()->add('jquery', 'js/jquery.js');
                $theme->asset()->container('core-js')->usePath()->add('bootstrap', 'bs3/js/bootstrap.min.js', array('jquery'));

                $theme->asset()->container('core-js')->usePath()->add('dcjqaccordion', 'js/jquery.dcjqaccordion.2.7.js', array('jquery'));
                $theme->asset()->container('core-js')->usePath()->add('scrollTo', 'js/jquery.scrollTo.min.js', array('jquery'));
                $theme->asset()->container('core-js')->usePath()->add('slimScroll', 'js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js', array('jquery'));
                $theme->asset()->container('core-js')->usePath()->add('nicescroll', 'js/jquery.nicescroll.js', array('jquery'));
                $theme->asset()->container('core-js')->usePath()->add('bootstrap-fileupload', 'js/bootstrap-fileupload/bootstrap-fileupload.js', array('jquery'));
                $theme->asset()->container('core-js')->usePath()->add('wysihtml5', 'js/bootstrap-wysihtml5/wysihtml5-0.3.0.js', array('jquery'));
                $theme->asset()->container('core-js')->usePath()->add('bootstrap-wysihtml5', 'js/bootstrap-wysihtml5/bootstrap-wysihtml5.js', array('jquery'));
                
                //<!--Easy Pie Chart-->
                $theme->asset()->container('core-js')->usePath()->add('easypiechart', 'js/easypiechart/jquery.easypiechart.js', array('jquery'));
                //<!--Sparkline Chart-->
                $theme->asset()->container('core-js')->usePath()->add('sparkline', 'js/sparkline/jquery.sparkline.js', array('jquery'));
                //<!--jQuery Flot Chart-->
                // $theme->asset()->container('core-js')->usePath()->add('jquery.flot', 'js/flot-chart/jquery.flot.js', array('jquery'));
                // $theme->asset()->container('core-js')->usePath()->add('jquery.flot.tooltip', 'js/flot-chart/jquery.flot.tooltip.min.js', array('jquery'));
                // $theme->asset()->container('core-js')->usePath()->add('jquery.flot.resize', 'js/flot-chart/jquery.flot.resize.js', array('jquery'));
                // $theme->asset()->container('core-js')->usePath()->add('jquery.flot.pie.resize', 'js/flot-chart/jquery.flot.pie.resize.js', array('jquery'));
                // //<!--common script init for all pages-->
                $theme->asset()->container('core-js')->usePath()->add('scripts', 'js/scripts.js', array('jquery'));
                

            }

        )

    )

);