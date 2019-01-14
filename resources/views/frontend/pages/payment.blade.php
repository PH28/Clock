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
				    @include('frontend.block.errors')
						@if( Auth::check())
						<div class="sign-up">
							<h4><span class="text-danger">*</span>Họ và tên :</h4>
							<input type="text" name="name"  placeholder="Họ và tên" value="{{Auth::user()->name}}"  required="">
						</div>
						<div class="sign-up">
							<h4><span class="text-danger">*</span>Email :</h4>
							<input type="text" name="email" placeholder="Email"value="{{Auth::user()->email}}"  required="">
						</div>
						<div class="sign-up">
							<h4><span class="text-danger">*</span>Địa chỉ :</h4>
							<input type="text" name="address" placeholder="Địa chỉ" value="{{Auth::user()->address}}"  required="">
						</div>
						<div class="sign-up">
							<h4><span class="text-danger">*</span>Số điện thoại :</h4>
							<input type="text" name="phone" placeholder="Số điện thoại" value="{{Auth::user()->phone}}" required="">
						</div>
						<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
						@else
						<div class="sign-up">
							<h4><span class="text-danger">*</span>Họ và tên :</h4>
							<input type="text" name="name"  placeholder="Họ và tên"   required="">
						</div>
						<div class="sign-up">
							<h4><span class="text-danger">*</span>Email :</h4>
							<input type="text" name="email" placeholder="Email"  required="">
						</div>
						<div class="sign-up">
							<h4><span class="text-danger">*</span>Địa chỉ :</h4>
							<input type="text" name="address" placeholder="Địa chỉ"   required="">
						</div>
						<div class="sign-up">
							<h4><span class="text-danger">*</span>Số điện thoại :</h4>
							<input type="text" name="phone" placeholder="Số điện thoại"  required="">
						</div>
						@endif
			    	<input type="hidden" name="status" value="0">
						<div class="sign-up">
							<input type="submit" value="Đặt hàng" >
						</div>
					</div>

					<h3 class="bars">Đơn hàng</h3>
 					<div class="col-md-6">
 						  <table class="table table-bordered">
 							<thead>
 								<tr>
 									<th>Tên sản phẩm</th>
 									<th>Hình ảnh</th>
 									<th>Số lượng</th>
 									<th>Thành tiền</th>
 								</tr>
 							</thead>
 							<tbody>
 				@foreach($data as $row)
 								<tr>
 									<td><code>{!! $row->name !!}</code></td>
 									<td><img src="{!! asset('images/'.$row->options->image) !!}" class="pull-left product-image" width="30" style="margin-right:5px;"></td>
 									<td><code>{!! $row->qty !!}</code></td>
 									<td>
										<span class="badge badge-primary">
											@if($row->options->sale > 0)
											 {{ number_format($row->options->sale * $row->qty,0,',','.'),
												$totalsale+=($row->options->sale * $row->qty) }} đ
											@else
												{{ number_format($row->qty * $row->price,0,',','.'),
												$total+=($row->qty * $row->price) }} đ
											@endif
										</span>
									</td>
 								</tr>
				@endforeach
 								<tr>
									<td colspan="3"><code>Tổng tiền</code></td>
 									<td>
										<span class="badge badge-danger">
											{{number_format($totalsale + $total,0,',','.')}} đ
										</span>
									</td>
 								</tr>
			        	</tbody>
 						  </table>
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
