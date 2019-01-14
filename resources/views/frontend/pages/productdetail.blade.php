@extends('frontend.master')
@section('content')
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
					<ul class="slides">
						<li data-thumb="{!! asset('images/'.$productdetail->image) !!}">
							<div class="thumb-image"><img src="{!! asset('images/'.$productdetail->image) !!}" data-imagezoom="true" class="img-responsive" style="width:450px;height:460px;"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<h3>{{$productdetail->name}}</h3><br>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Thương hiệu : {{$productdetail->made}}</h5>
						</div>
					</div>
		@if($productdetail->sale == 0)
		      <p>
	 	        <span class="item_price">{{ number_format($productdetail->price,0,',','.')}} đ</span>
	       </p>
		@else
		     <p>
				   <span class="item_price">{{ number_format($productdetail->sale,0,',','.')}} đ</span>
			     <del>-{{ number_format($productdetail->price,0,',','.')}} đ</del>
	     	</p>
		@endif
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
          <div class="description">
            <h2>Tổng quan nhanh :</h2>
            <p><span>{!!$productdetail->content!!}</span></p>
          </div>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Quality :</h5>
						<input type="number" name="" value="1">
						</div>
					</div> <br>
					<div class="occasion-cart">
						<a href="{!! url('addcart',$productdetail->id) !!}" class="item_add hvr-outline-out button2">Add to cart</a>
				  </div>
		     </div>
				<div class="clearfix"> </div>
				<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Mô tả sản phẩm</a></li>
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Đánh giá(1)</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h2>Mô tả sản phẩm</h2>
                <br>
								<p><span>{!! $productdetail->description !!}</span></p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="{!! url ('frontend/images/men3.jpg') !!}" alt=" " class="img-responsive">
										</div>

										<div class="bootstrap-tab-text-grid-right">
								@foreach($comments as $comment)
											<ul>
												<li><a href="#">{{$comment->user->name}}</a></li>
												<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
											</ul>
											<p>{!! $comment->content !!}</p>
								@endforeach
										</div>

										<div class="clearfix"> </div>
									</div>
            	@if( Auth::check())
									<div class="add-review">
										<h4>Thêm đánh giá</h4>
										<form role="form"  class="form-horizontal" method="POST" action="{{route('comment')}}">
										 <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
										 <input type="hidden" name="product_id" value="{{$productdetail->id}}">
										 <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
										 <textarea type="text" name="content" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
										 <input type="submit" value="SEND">
									 </form>
									</div>
						   @endif
								</div>
							</div>
						</div>
					</div>
				</div>
	    </div>
    </div>
<!-- //single -->
@endsection
