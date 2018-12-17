<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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


<!-- //pignose css -->
<link href="{!! url('frontend/css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{!! url('frontend/js/jquery-2.1.4.min.js') !!}"></script>
<!-- //js -->
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
	<div class="header">
		<div class="container">
			<ul>
				<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
				<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
			</ul>
		</div>
	</div>
	<!-- //header -->
	<!-- header-bot -->
	<div class="header-bot">
		<div class="container">
			<div class="col-md-3 header-left">
				 <h1><a href="index.html"><span class="m_1">W</span>atches</a></h1> <!-- // tiêu đề web  -->
			</div>
			<div class="col-md-6 header-middle">
				<form>
					<div class="search">
						<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					</div>
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All categories</option>
							<option value="null">Electronics</option>
							<option value="AX">kids Wear</option>
							<option value="AX">Men's Wear</option>
							<option value="AX">Women's Wear</option>
							<option value="AX">Watches</option>
						</select>
					</div>
					<div class="sear-sub">
						<input type="submit" value=" ">
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
			<div class="col-md-3 header-right footer-bottom">
				<ul>
					<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
					</li>
					<li><a class="fb" href="#"></a></li>
					<li><a class="twi" href="#"></a></li>
					<li><a class="insta" href="#"></a></li>
					<li><a class="you" href="#"></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //header-bot -->
	<!-- banner -->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav menu__list">
						<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
						<li class="dropdown menu__item">
							<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
											<a href="mens.html"><img src="images/woo1.jpg" alt=" "/></a>
										</div>
										<div class="col-sm-3 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><a href="mens.html">Clothing</a></li>
												<li><a href="mens.html">Wallets</a></li>
												<li><a href="mens.html">Footwear</a></li>
												<li><a href="mens.html">Watches</a></li>
												<li><a href="mens.html">Accessories</a></li>
												<li><a href="mens.html">Bags</a></li>
												<li><a href="mens.html">Caps & Hats</a></li>
											</ul>
										</div>
										<div class="col-sm-3 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><a href="mens.html">Jewellery</a></li>
												<li><a href="mens.html">Sunglasses</a></li>
												<li><a href="mens.html">Perfumes</a></li>
												<li><a href="mens.html">Beauty</a></li>
												<li><a href="mens.html">Shirts</a></li>
												<li><a href="mens.html">Sunglasses</a></li>
												<li><a href="mens.html">Swimwear</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
						</li>
						<li class="dropdown menu__item">
							<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-3 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><a href="womens.html">Clothing</a></li>
												<li><a href="womens.html">Wallets</a></li>
												<li><a href="womens.html">Footwear</a></li>
												<li><a href="womens.html">Watches</a></li>
												<li><a href="womens.html">Accessories</a></li>
												<li><a href="womens.html">Bags</a></li>
												<li><a href="womens.html">Caps & Hats</a></li>
											</ul>
										</div>
										<div class="col-sm-3 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li><a href="womens.html">Jewellery</a></li>
												<li><a href="womens.html">Sunglasses</a></li>
												<li><a href="womens.html">Perfumes</a></li>
												<li><a href="womens.html">Beauty</a></li>
												<li><a href="womens.html">Shirts</a></li>
												<li><a href="womens.html">Sunglasses</a></li>
												<li><a href="womens.html">Swimwear</a></li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img multi-gd-text ">
											<a href="womens.html"><img src="images/woo.jpg" alt=" "/></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
						</li>
						<li class=" menu__item"><a class="menu__link" href="electronics.html">Electronics</a></li>
						<li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li>
						<li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>
						</ul>
					</div>
					</div>
				</nav>
			</div>
			<div class="top_nav_right">
				<div class="cart box_1">
							<a href="checkout.html">
								<h3> <div class="total">
									<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
									<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

								</h3>
							</a>
							<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //banner-top -->
	<!-- banner -->
	<div class="banner-grid">
		<div id="visual">
				<div class="slide-visual">
					<!-- Slide Image Area (1000 x 424) -->
					<ul class="slide-group">
						<li><img class="img-responsive" src="{!! url('frontend/images/ba1.jpg') !!}" alt="Dummy Image" /></li>
						<li><img class="img-responsive" src="{!! url('frontend/images/ba2.jpg') !!}" alt="Dummy Image" /></li>
						<li><img class="img-responsive" src="{!! url('frontend/images/ba3.jpg') !!}" alt="Dummy Image" /></li>
					</ul>

					<!-- Slide Description Image Area (316 x 328) -->
					<div class="script-wrap">
						<ul class="script-group">
							<li><div class="inner-script"><img class="img-responsive" src="{!! url('frontend/images/baa1.jp') !!}g" alt="Dummy Image" /></div></li>
							<li><div class="inner-script"><img class="img-responsive" src="{!! url('frontend/images/baa2.jp') !!}g" alt="Dummy Image" /></div></li>
							<li><div class="inner-script"><img class="img-responsive" src="{!! url('frontend/images/baa3.jp') !!}g" alt="Dummy Image" /></div></li>
						</ul>
						<div class="slide-controller">
							<a href="#" class="btn-prev"><img src="{!! url('frontend/images/btn_prev.png') !!}" alt="Prev Slide" /></a>
							<a href="#" class="btn-play"><img src="{!! url('frontend/images/btn_play.png') !!}" alt="Start Slide" /></a>
							<a href="#" class="btn-pause"><img src="{!! url('frontend/images/btn_pause.png') !!}" alt="Pause Slide" /></a>
							<a href="#" class="btn-next"><img src="{!! url('frontend/images/btn_next.png') !!}" alt="Next Slide" /></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		<script type="text/javascript" src="{!! url('frontend/js/pignose.layerslider.js') !!}"></script>
		<script type="text/javascript">
		//<![CDATA[
			$(window).load(function() {
				$('#visual').pignoseLayerSlider({
					play    : '.btn-play',
					pause   : '.btn-pause',
					next    : '.btn-next',
					prev    : '.btn-prev'
				});
			});
		//]]>
		</script>
	</div>
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
