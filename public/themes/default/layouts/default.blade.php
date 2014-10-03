<!DOCTYPE html><!--[if IE 7]>
<html lang="en" class="ie7 oldie"></html><![endif]--><!--[if IE 8]>
<html lang="en" class="ie8 oldie"></html><![endif]-->
<!-- [if gt IE 8] <!-->
<html lang="en">
<!-- <![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <title>{{ Theme::get('title') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {{ Theme::asset()->styles() }}
    {{ Theme::asset()->container('addon-css')->styles(); }}
    {{ Theme::asset()->container('header')->scripts(); }}
    <link rel="shortcut icon" href="{{ asset('themes/default/assets/images/favicon.ico') }}" />
</head>
<body>
{{ Theme::partial('header') }}
{{ Theme::partial('menu') }}
<div class="clear"></div>
<section class="maincontainer">
    {{ Theme::content() }}
    
</section>
{{ Theme::partial('footer') }}
{{ Theme::asset()->container('footer')->scripts(); }}

<script type="text/javascript">
$(window).load(function(){
        //$('.fancybox').fancybox();
    $('.flexslider').flexslider();
    $('#carousel-pg').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 130,
        itemMargin: 2,
        asNavFor: '#slider-pg'
    });
    $('#slider-pg').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-pg"
    });
});
$(document).ready(function() {
    $("#accordion-wrapper").zAccordion({
        timeout: 4000,
        slideWidth: 482,
        width: 1024,
        height: 512
    });
});
</script>
{{ Theme::asset()->container('addon-inline')->scripts(); }}
{{ Theme::asset()->container('footer-bottom')->scripts(); }}
{{ Theme::asset()->container('addon-js')->scripts(); }}


</body>
</html>