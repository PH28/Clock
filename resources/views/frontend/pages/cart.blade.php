@extends('frontend.master')
@section('content')
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>Giỏ hàng của tôi</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Remove</th>
						<th>Hình ảnh</th>
						<th>Số lượng</th>
						<th>Sản phẩm</th>
						<th>Đơn giá (VNĐ)</th>
						<th>Thành tiền(VNĐ)</th>
					</tr>
				</thead>
  @if ($cart != 0)
	@foreach($data as $item)
					<tr class="rem1">
						<td class="invert-closeb">
							<div class="rem">
								<a href="{!! url('removecart',$item->rowId) !!}"><div class="close1"></div></a>
							</div>
						</td>
						<td class="invert-image"><a href="#"><img src="{!! asset('images/'.$item->options->image)!!}" alt=" " class="img-responsive" style="width:100px;height:110px;" /></a></td>
						<td class="invert">
							 <div class="quantity">
								<input type="number" name="" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')">
							</div>
						</td>
						<td class="invert"><span class="badge badge-primary"><h5>{{$item->name}}</h5></span></td>
						<td class="invert">
							<span class="badge badge-primary">
								<h5>
							@if($item->options->sale > 0)
								 {{ number_format($item->options->sale,0,',','.')}} đ
							@else
								 {{ number_format($item->price,0,',','.')}} đ
							@endif
								</h5>
							</span>
						</td>
						<td class="invert">
							<span class="badge badge-primary">
								<h5>
							@if($item->options->sale > 0)
							 {{ number_format($item->options->sale * $item->qty,0,',','.'),
							 $totalsale+=($item->options->sale * $item->qty) }} đ
							@else
							 {{ number_format($item->qty * $item->price,0,',','.'),
							 $total+=($item->qty * $item->price) }} đ
							@endif
								</h5>
							</span>
						</td>
					</tr>
		@endforeach
    @else
	       	<tr class="rem1">
		        <td colspan="6"><span class="badge badge-danger">Hiện không có sản phẩm nào trong giỏ hàng của bạn</span></td>
		      </tr>
		@endif
				<!--quantity-->
								<script type="text/javascript">
								   function updateCart(qty,rowId)
									 {
										 // console.log(qty);      // kiểm tra id và số lượng
										 // console.log(rowId);
										 $.get(
											 "{{route('updatecart')}}",
											 {qty:qty,rowId:rowId},
											 function(){
												 location.reload();
											 }
										 );
									 }
								</script>
								<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">

				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{route('index')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Tiếp tục mua sắm</a>
				</div>

				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{route('destroycart')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Hủy giỏ hàng</a>
				</div>

        <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
          <a href="{{route('payment')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Thanh toán</a>
        </div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Tổng tiền</h4>
					<ul>
						<li>Tổng tiền<i></i> :<span class="badge badge-danger"><h5>{{number_format($totalsale + $total,0,',','.')}} đ</h5></span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
<!-- //check out -->
@endsection
