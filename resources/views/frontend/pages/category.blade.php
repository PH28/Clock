@extends('frontend.master')
@section('content')
<!-- mens -->
<div class="men-wear">
	<div class="container">
		<div class="col-md-4 products-left">
			<div class="filter-price">
							<!---->
							<script type='text/javascript'>//<![CDATA[
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>

							</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
					 <!---->
			</div>
			<div class="css-treeview">
				<h4>Categories</h4>
				<ul class="tree-list-pad">
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Danh sách</label>
						<ul>
			  	@foreach ($category_show as $value)
							<li><input type="checkbox" id="item-0-0" /><a href="{{route('listProductByCateId',$value->id)}}">{{$value->name}}</a></li>
        	@endforeach
						</ul>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<div class="men-wear-top">
				<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
			  	</script>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="{!! url('frontend/images/men3.jpg') !!}" alt=" " />
				</div>
				<div class="col-sm-8 men-wear-right">
					<h4>Exclusive Men's Collections</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
					ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
					explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
					odit aut fugit. </p>
				</div>
				<div class="clearfix"></div>
			</div>




				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<div class="single-pro">
			@foreach ($products as $product)
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{!! url('images/'.$product->image) !!}" alt="" class="pro-image-front">
									<img src="{!! url('images/'.$product->image) !!}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{!! route('productdetail',$product->id) !!}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{!! route('productdetail',$product->id) !!}">{{$product->name}}</a></h4>
									<div class="info-product-price">
							@if($product->sale == 0)
										<span class="item_price">{{ number_format($product->price,0,',','.')}} đ</span>
              @else
							      <span class="item_price">{{ number_format($product->sale,0,',','.')}} đ</span>
							      <del>{{ number_format($product->price,0,',','.')}} đ </del>
							@endif
									</div>
									<a href="{!! url('addcart',$product->id) !!}" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
			@endforeach
					<div class="clearfix"></div>
			</div>
	<div class="pagination-grid text-right">
		{{$products->render()}}
	</div>
	</div>
</div>
<!-- //mens -->
@endsection
