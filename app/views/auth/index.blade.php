<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="{{ asset('themes/admin/assets/images/favicon.ico') }}">

    <title>Login</title>

    <!--Core CSS -->
    <link href="{{ asset('themes/admin/assets/bs3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/admin/assets/css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('themes/admin/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/admin/assets/css/style-responsive.css') }}" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      {{ Form::open(array('action' => array('AuthController@authenticate'), 'class' => 'form-signin', 'method' => 'post')) }}
        <h2 class="form-signin-heading">ผู้ดูแลระบบ</h2>
        <div class="login-wrap">

            <div class="user-login-info">
            @if(!empty(Session::get('message')))
            <div class="alert alert-success fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                {{ Session::get('message') }}
            </div>
            @endif
                <input type="text" class="form-control" name="username" placeholder="User ID" autofocus required>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
           
            <button class="btn btn-lg btn-login btn-block" type="submit">เข้าสู่ระบบ</button>

            
        </div>

          

      {{ form::close() }}

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="{{ asset('themes/admin/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/bs3/js/bootstrap.min.js') }}"></script>

  </body>
</html>
