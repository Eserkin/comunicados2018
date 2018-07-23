<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login | Comunicados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <!-- Base Css Files -->
    
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/animate-css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <style>
    .carousel { z-index: -99; }
    .carousel .item {
    position: fixed;
    width: 100%; height: 100%;
    -webkit-transition: opacity 1s;
    -moz-transition: opacity 1s;
    -ms-transition: opacity 1s;
    -o-transition: opacity 1s;
    transition: opacity 1s;
    }
    .carousel .one {
    background: url({{asset('img/schoolPattern.jpg')}});
    background-repeat: repeat;
    background-size: auto 300px;
    -webkit-filter: grayscale(80%);
    filter: grayscale(80%);
    }
/*    .carousel .two {
    background: url({{asset('img/premio1.jpg')}});
    background-size: cover;
    -moz-background-size: cover;
    }
    .carousel .three {
    background: url({{asset('img/bg3.jpg')}});
    background-size: cover;
    -moz-background-size: cover;
    }*/
    .carousel .active.left {
    left:0;
    opacity:0;
    z-index:2;
    }

    .login-wrap {
          padding: 20px 40px !important;
          background: rgb(255,255,255) !important;
          -webkit-box-shadow: 5px 4px 17px -4px rgba(0,0,0,0.75);
          -moz-box-shadow: 5px 4px 17px -4px rgba(0,0,0,0.75);
          box-shadow: 5px 4px 17px -4px rgba(0,0,0,0.75);
    }
    </style>
  </head>
  <body class="fixed-left login-page">
    
    <div id="myCarousel" class="carousel container slide">
      <div class="carousel-inner">
        <div class="active item one"></div>
        <div class="item two"></div>
        <div class="item three"></div>
      </div>
    </div>
    <div class="container">
      <div class="full-content-center">
        <div class="login-wrap animated flipInX">
          <div class="login-block">
            <img src="{{asset('img/login-logo.png')}}" class="logo">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }} login-input">
                <i class="fa fa-user overlay"></i>
                <input id="dni" type="text" class="form-control text-input" name="dni" value="{{ old('dni') }}"  placeholder="DNI" required autofocus>
                @if ($errors->has('dni'))
                <span class="help-block">
                  <strong>{{ $errors->first('dni') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} login-input">
                <i class="fa fa-key overlay"></i>
                <input id="password" type="password" class="form-control text-input" name="password" placeholder="Contraseña" required>
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
              <div class="row">

                  <button type="submit" class="btn btn-success btn-block">
                  Iniciar
                  </button>


                <div class="col-sm-6">
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    ¿Olvidó su contraseña?
                  </a>
                </div>

              </div>
          </form>

        </div>
      </div>
    </div>
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    
 <!--   <script>
    var resizefunc = [];
    </script>
    <script src="{{asset('assets/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('.carousel').carousel({interval: 4000});
    });
    </script>-->
  </body>
</html>