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


<!--Messages -->
@include('frontend.block.errors')
@include('frontend.block.flash_mag')
<!-- end messages -->
<script type="text/javascript">
$(document).ready(function()
{
	$(".alert").delay(5000).slideUp();
});
</script>

  <!-- banner -->
@include('frontend.layout.banner_top')
  <!-- //banner-top -->

	<!-- banner -->
@include('frontend.layout.banner')
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

    @include('frontend.layout.app')

  	</div>
  </div>
  <!-- //product-nav -->
   @include('frontend.layout.product_nav')
<!--end product-nav  -->


<!-- login -->
@include('frontend.layout.login')
<!-- end login -->

<!-- footer -->
@include('frontend.layout.footer')
<!-- end footer -->

<!-- login -->
			<!-- <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Đăng kí tài khoản miễn phí</h3>

										<form role="form" class="form-horizontal" action="{{route('register')}}" method="post">
                     <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Name :</h4>
												<input type="text" name="name" placeholder="Họ tên" required="" >
												<p class="alert text-danger"> {{$errors->first('name')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Email :</h4>
												<input type="text" name="email" placeholder="Email"  required="">
												<p class="alert text-danger"> {{$errors->first('email')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Số điện thoại :</h4>
												<input type="text" name="phone" placeholder="Số điện thoại"  required="" >
												<p class="alert text-danger"> {{$errors->first('phone')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Địa chỉ :</h4>
												<input type="text" name="address" placeholder="Địa chỉ"  required="" >
												<p class="alert text-danger"> {{$errors->first('address')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Mật khẩu :</h4>
												<input type="password" name="password" placeholder="Mật khẩu"  required="" >
												<p class="alert text-danger"> {{$errors->first('password')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Nhập lại mật khẩu :</h4>
												<input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu"  required="" >
												<p class="alert text-danger"> {{$errors->first('password_confirmation')}}</p>
											</div>
                      <input type="hidden" name="roles" value="0">
                      <input type="hidden" name="level" value="2">
											<div class="sign-up">
												<input type="submit" value="Đăng kí" >
											</div>

										</form>
									</div>

									<div class="login-right">
										<h3>Đăng nhập bằng tài khoản của bạn</h3>
										<form method="POST" action="{{route('login')}}">
										 <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
											<div class="sign-in">
												<h4><span class="text-danger">*</span> Email :</h4>
												<input type="text" name="email" placeholder="Nhập email"   required="">
											</div>
											<div class="sign-in">
												<h4><span class="text-danger">*</span> Password :</h4>
												<input type="password" name="password" placeholder="Nhập password"  required="">
											</div>
											<div class="sign-in">
												<input type="submit" value="Đăng nhập" >
											</div>
										</form>
									</div>


									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
<!-- endlogin -->
