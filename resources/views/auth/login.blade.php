<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ZoomXS Dashboard">
    <meta name="keyword" content="ZoomXS, Dashboard, Admin, Template, Maintenance, Bootstrap, Laravel, Responsive, Retina, Minimal">
    <title>ZoomXS Dashboard</title>

    <!-- Bootstrap CSS -->    
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/bootstrap-theme.css') !!}
    <!-- font icon -->
    {!! Html::style('css/elegant-icons-style.css') !!}
    {!! Html::style('assets/font-awesome/css/font-awesome.css') !!}   
    <!-- Custom styles -->
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/style-responsive.css') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
        {!! Html::script('js/html5shiv.js') !!}
        {!! Html::script('js/respond.min.js') !!}

    <![endif]-->

</head>

  <body class="login-img2-body">

    <div class="container">
 
        <div class="login-wrap">

            <form class="login-form" method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <p class="login-img"><i class="icon_lock_alt"></i></p>

                <div class="input-group">
                  <span class="input-group-addon"><i class="icon_profile"></i></span>
                  <input type="email" class="form-control" placeholder="Email" 
                  name="email" value="{{ old('email') }}" autofocus>
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <label class="checkbox">
                    <input type="checkbox" name="remember" value="remember-me"> Remember me
                    <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                </label>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
         
            </form>

        </div>
   
    </div>

  </body>
</html>
