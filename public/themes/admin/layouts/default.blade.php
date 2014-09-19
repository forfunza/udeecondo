<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="{{ asset('themes/admin/assets/images/favicon.ico') }}">

    <title>{{ Theme::get('title') }}</title>

    
    {{ Theme::asset()->container('core-css')->styles() }}

    {{ Theme::asset()->container('custom-css')->styles() }}
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="{{ asset('themes/admin/assets/themes/admin/assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
{{ Theme::partial('header') }}
<!--header end-->
{{ Theme::partial('menu') }}
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">

        <section class="wrapper">
        @if(Session::has('message'))
        <div class="alert alert-success fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            {{ Session::get('message') }}
        </div>
        @endif
            {{ Theme::content() }}
        </section>
    </section>
    <!--main content end-->


</section>

<!-- Placed js at the end of the document so the pages load faster -->
{{ Theme::asset()->container('core-js')->scripts() }}
{{ Theme::asset()->container('custom-js')->scripts() }}
{{ Theme::asset()->container('inline-script')->scripts() }}

</body>
</html>
