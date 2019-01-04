@extends('frontend.master')
@section('content')


<!-- mens -->
<div class="men-wear">
	<div class="container">
		<div class="col-md-4 products-left">
			<div class="css-treeview">
				<h4>Danh mục</h4>
				<ul class="tree-list-pad">
			@foreach ($category as $key)
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>{{$key->name}}</label>
					  	@foreach ($categorys as $category)
									<a href="#">{!! $category->name !!} </a>
              @endforeach
					</li>
			 @endforeach
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Product Compare(0)</h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>Sort By</h6>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Default</option>
						<option value="null">Name(A - Z)</option>
						<option value="null">Name(Z - A)</option>
						<option value="null">Price(High - Low)</option>
						<option value="null">Price(Low - High)</option>
						<option value="null">Model(A - Z)</option>
						<option value="null">Model(Z - A)</option>
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6>Showing</h6>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">7</option>
						<option value="null">14</option>
						<option value="null">28</option>
						<option value="null">35</option>
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">
				<script src="{!! url('frontend/js/responsiveslides.min.js') !!}"></script>
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
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="{!! url('frontend/images/men1.jpg') !!}" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="{!! url('frontend/images/men2.jpg') !!}" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="{!! url('frontend/images/men1.jpg') !!}" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="{!! url('frontend/images/men2.jpg') !!}" alt=" "/>
						</li>
					</ul>
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
										<span class="item_price">{{ number_format($product->price,0,',','.')}} đ</span>
										<del>{{ number_format($product->sale,0,',','.')}} đ </del>
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
