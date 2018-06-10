<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrarse | Comunicados</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

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

        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    </head>
    <body class="fixed-left signup-page">

	<!-- Begin page -->
	<div class="container">
		<div class="full-content-center animated fadeInDownBig">
			<div class="login-wrap">
				<div class="login-block">
				<img src="{{asset('img/login-logo.png')}}" class="logo">
					<form role="form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
						<div class="form-group login-input">
						<i class="fa fa-envelope overlay"></i>
						<input type="email" id="email" name="email" class="form-control text-input {{ $errors->has('email') ? ' has-error' : '' }}"  placeholder="E-mail" value="{{ old('email') }}" required>
						@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" id="dni" name="dni" class="form-control text-input {{ $errors->has('dni') ? ' has-error' : '' }}" placeholder="Número de Documento" value="{{ old('dni') }}" required>
						@if ($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group login-input {{ $errors->has('password') ? ' has-error' : '' }}">
						<i class="fa fa-key overlay"></i>
						<input type="password" id="password" name="password" class="form-control text-input" placeholder="********" value="{{ old('password') }}" required>
						@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" id="password-confirm" name="password_confirmation" class="form-control text-input" placeholder="********" required>
						</div>
						<div>
							<div class="checkbox">
								<label><input type="checkbox"> Acepto los <strong><a href='#'>Términos y Condiciones</a></strong></label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
							<button type="submit" class="btn btn-default btn-block">Registrarse</button>
							</div>
						</div>
					</form>
					
				</div>
			</div>
			
		</div>
	</div>
	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('assets/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	</body>
</html>