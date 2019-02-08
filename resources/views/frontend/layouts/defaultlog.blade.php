<!DOCTYPE html>
<html lang="en">
<head>
<title>The Estate</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Estate Teplate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/web/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/web/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/web/responsive.css')}}">

<!-- for post page -->

<link href="{{asset('css/posted_page/office.css" rel="stylesheet" type="text/css')}}">
</head>

<body>



	<!-- Header -->

	
	@include('frontend.includes.nav')    
@yield('content')
	<!-- Search Box -->


	<!-- Featured Properties -->

	

	<!-- Footer -->

	
	<!-- Credits -->

	<div class="credits">
		<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with  --><i class="fa fa-heart" aria-hidden="true"></i>  <a href="https://" style="color: white" target="_blank">Basavara.com</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
	</div>

</div>

<script src="{{asset('frontend/webjs/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('frontend/web/bootstrap4/popper.js')}}"></script>
<script src="{{asset('frontend/web/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('frontend/webjs/custom.js')}}"></script>
</body>

</html>