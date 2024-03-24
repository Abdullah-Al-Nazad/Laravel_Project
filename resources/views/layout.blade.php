<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('pato-master/images/icons/favicon.png')}}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/fonts/themify/themify-icons.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/vendor/slick/slick.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/vendor/lightbox2/css/lightbox.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('pato-master/css/main.css')}}">
	<!--===============================================================================================-->
</head>

<!-- <body class="animsition"> -->

<body>
	<!-- Header Start -->
	@include('header')
	<!-- Header End -->

	<!-- Body Start -->
    @yield('content')
	<!-- Body End -->

	<!-- Footer start-->
	@include('footer')
	<!-- Footer end -->

	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('pato-master/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('pato-master/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('pato-master/js/slick-custom.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/parallax100/parallax100.js')}}"></script>
	<script type="text/javascript">
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('pato-master/vendor/lightbox2/js/lightbox.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('pato-master/js/main.js')}}"></script>
	<!--===============================================================================================-->


</body>

</html>