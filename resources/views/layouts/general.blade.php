<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 
	<title>@yield('title')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Comunicados">

    <!-- Base Css Files -->
 	<link href="{{asset('assets/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
 	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
 	<link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
 	<link href="{{asset('assets/fontello/css/fontello.css')}}" rel="stylesheet" />
 	<link rel="stylesheet" href="{{asset('assets/animate-css/animate.min.css')}}">
 	<link href="{{asset('assets/nifty-modal/css/component.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/ios7-switch/ios7-switch.css')}}" rel="stylesheet" /> 
    <link href="{{asset('assets/pace/pace.css')}}" rel="stylesheet" /> 
	<link href="{{asset('assets/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/jquery-icheck/skins/all.css')}}" rel="stylesheet" />

	
	
    <!-- Extra CSS Libraries Start -->

	@yield('styles')
	<link href="{{asset('assets/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
	
	<!-- Extra CSS Libraries End -->

	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/style-responsive.css')}}">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
 
</head>
 
<body class="fixed-left">

	<!-- Modal Logout -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmación</h3>
            <div>
                <p class="text-center">Desea cerrar sesión?</p>
                <p class="text-center">
                    <button class="btn btn-danger md-close">No!</button>
                    <a href="login.html" class="btn btn-success md-close">Si, estoy seguro</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Modal End -->

	<!-- Begin page -->
	<div id="wrapper">
		
		<!-- Top Bar Start -->
		<div class="topbar">
			@include('layouts.topbar')
		</div>
		<!-- Top Bar End -->
 
		<!-- Left Sidebar Start -->
		<div class="left side-menu">
			@yield('sidebar')
		</div>
		<!-- Left Sidebar End -->
 		
 		<!-- Start right content -->
		<div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
 
			<div class="content">
				
				@yield('content')

				<!-- PAGE CONTENT -->
			</div>
		</div>
	</div>
	<!-- End of page -->

	<!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->

    <script>
       var resizefunc = [];
    </script>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{asset('assets/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{asset('assets/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('assets/jquery-detectmobile/detect.js')}}"></script>
	<script src="{{asset('assets/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
	<script src="{{asset('assets/ios7-switch/ios7.switch.js')}}"></script>
	<script src="{{asset('assets/fastclick/fastclick.js')}}"></script>
	<script src="{{asset('assets/jquery-blockui/jquery.blockUI.js')}}"></script>
	<script src="{{asset('assets/bootstrap-bootbox/bootbox.min.js')}}"></script>
	<script src="{{asset('assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('assets/jquery-sparkline/jquery-sparkline.js')}}"></script>
	
	<script src="{{asset('assets/nifty-modal/js/classie.js')}}"></script>
	<script src="{{asset('assets/nifty-modal/js/modalEffects.js')}}"></script>

	<script src="{{asset('assets/sortable/sortable.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
	<script src="{{asset('assets/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('')}}assets/bootstrap-select2/select2.min.js"></script>
	<script src="{{asset('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
	<script src="{{asset('assets/pace/pace.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/jquery-icheck/icheck.min.js')}}"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="{{asset('assets/prettify/prettify.js')}}"></script>
	<script src="{{asset('js/init.js')}}"></script>
	
	<!-- Page Specific JS Libraries -->
	<script src="{{asset('assets/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{asset('js/pages/calendar.js')}}"></script>
	@yield('javascript')
</body>
</html>