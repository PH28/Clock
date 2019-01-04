@extends('frontend.master')
@section('content')


<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<h4>Address</h4>
						<p>12K Street, 45 Building Road <span>New York City.</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid2">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<h4>Call Us</h4>
						<p>+1234 758 839<span>+1273 748 730</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid3">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<h4>Email</h4>
						<p><a href="mailto:info@example.com">info@example1.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> <br>
			<h3 class="tittle">Thông tin khách hàng</h3>
			<form method="POST" action="{{route('postpayment')}}">
			 <input type="hidden" name="_token" value="{!!csrf_token()!!}">
				<div class="modal-body modal-spa">
					<div class="login-grids">
						<div class="login">
							<div class="login-bottom">
								<h3>Thông tin</h3>
						<div class="sign-up">
							<h4>Họ và tên :</h4>
							<input type="text" name="name"  placeholder="Họ và tên"  required="">
						</div>
						<div class="sign-up">
							<h4>Email :</h4>
							<input type="text" name="email" placeholder="Email"  required="">
						</div>
						<div class="sign-up">
							<h4>Địa chỉ :</h4>
							<input type="text" name="address" placeholder="Địa chỉ"  required="">
						</div>
						<div class="sign-up">
							<h4>Số điện thoại :</h4>
							<input type="text" name="phone" placeholder="Số điện thoại" required="">
						</div>
			    	<input type="hidden" name="status" value="0">
						<div class="sign-up">
							<input type="submit" value="Đặt hàng" >
						</div>
						</div>
						<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					  	<h4>Đơn hàng</h4>
								<ul>
			    @foreach($data as $row)
						<li>
							<img src="{!! asset('images/'.$row->options->image) !!}" class="pull-left product-image" width="30" style="margin-right:5px;">
								<div class="product-info pull-left">
								  <span class="product-info-name">
										<span style="font-size:10px">{!! $row->name !!}</span><span style="color:#C00; padding:0px 5px;"> X </span> {!! $row->qty !!}
									</span>
								</div>
                      <i>-</i>
									<span style="color:#C00">
										@if($row->options->sale > 0)
										 {{ number_format($row->options->sale * $row->qty,0,',','.'),
											$totalsale+=($row->options->sale * $row->qty) }} đ
										@else
											{{ number_format($row->qty * $row->price,0,',','.'),
											$total+=($row->qty * $row->price) }} đ
										@endif
									</span>
							<input type="hidden" name="total_price" value="{!! $totalsale+$total !!}">
						</li>
						<br>
				  @endforeach
				         	<li>Tổng <i>-</i> <strong style="color:#3C0">{{number_format($totalsale + $total,0,',','.')}} đ</strong></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- //contact -->
@endsection
