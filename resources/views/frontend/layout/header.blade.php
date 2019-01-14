
	<!-- header -->
	<div class="header">
		<div class="container">
			<ul>
				<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
				<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="">khanhhokhanhho@gmail.com</a></li>
			</ul>
		</div>
	</div>
	<!-- //header -->
	<!-- header-bot -->
	<div class="header-bot">
		<div class="container">

			<div class="col-md-3 header-left">
				 <h1><a href="{{route('index')}}"><img src="{!! url('frontend/images/logo.png') !!}"> </a></h1> <!-- // tiêu đề web  -->
			</div>

			<div class="col-md-6 header-middle">
				<form method="GET" action="{{route('search')}}">
					<div class="search">
						<input type="search" name="search" placeholder="Nhập tên sản phẩm hoặc giá bạn cần tìm ...">
					</div>
					<div class="sear-sub">
						<input type="submit" value=" ">
					</div>
					<div class="clearfix"></div>
				</form>
			</div>

			<div class="col-md-3 header-right footer-bottom">
				<ul>
					@if( Auth::check())
					<li><span class="badge badge-success"><h2>{{Auth::user()->name}}</h2></span></li>
		    	<li><a href="{{route('logout')}}"><h5>Logout</h5></a></li>
					@else
					<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a></li>
					<li><a class="fb" href="#"></a></li>
					<li><a class="twi" href="#"></a></li>
					<li><a class="insta" href="#"></a></li>
					<li><a class="you" href="#"></a></li>
					@endif
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //header-bot -->
