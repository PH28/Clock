<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Watches</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{!! url('frontend/css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{!! url('frontend/css/pignose.layerslider.css') !!}" rel="stylesheet" type="text/css" media="all" />
<!-- Ionicons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- //pignose css -->
<link href="{!! url('frontend/css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{!! url('frontend/js/jquery-2.1.4.min.js') !!}"></script>
<!-- //js -->
<!-- single -->
<script src="{!! url('frontend/js/imagezoom.js') !!}"></script>
<script src="{!! url('frontend/js/jquery.flexslider.js') !!}"></script>
<!-- single -->
<!-- cart -->
	<script src="{!! url('frontend/js/simpleCart.min.js') !!}"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{!! url('frontend/js/bootstrap-3.1.1.min.js') !!}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{!! url('frontend/js/jquery.easing.min.js') !!}"></script>
</head>
<body>

  <!-- header -->
@include('frontend.layout.header')
  <!-- //header-bot -->

  <!-- banner -->
@include('frontend.layout.banner_top')
  <!-- //banner-top -->

	<!-- banner -->
  <!-- endbanner -->

<!-- //product-nav -->
<div class="product-easy">
	<div class="container">
  		<script src="{!! url('frontend/js/easyResponsiveTabs.js') !!}" type="text/javascript"></script>
  		<script type="text/javascript">
  							$(document).ready(function () {
  								$('#horizontalTab').easyResponsiveTabs({
  									type: 'default', //Types: default, vertical, accordion
  									width: 'auto', //auto or any width like 600px
  									fit: true   // 100% fit in a container
  								});
  							});
  		 </script>
			 <!--- content -->
			 @yield('content')
			 <!-- end content -->
  	</div>
  </div>
  <!-- //product-nav -->
   @include('frontend.layout.product_nav')
  <!-- end product-nav -->

<!-- login -->
@include('frontend.layout.login')
<!-- end login -->

<!-- footer -->
@include('frontend.layout.footer')
<!-- end footer -->
