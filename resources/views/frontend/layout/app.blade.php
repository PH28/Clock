
<div class="sap_tabs">
	<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		<ul class="resp-tabs-list">
			<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sản phẩm mới</span></li>
			<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sản phẩm khuyến mãi</span></li>
		</ul>
		<div class="resp-tabs-container">
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
	@foreach ($product_show as $product_list)
	    <!--hiển thị sản phẩm mới -->
				<div class="col-md-3 product-men yes-marg">
					 <div class="men-pro-item simpleCart_shelfItem">
						 <div class="men-thumb-item">
							 <img src="{!! url('images/'.$product_list->image) !!}" alt="" class="pro-image-front">
							 <img src="{!! url('images/'.$product_list->image) !!}" alt="" class="pro-image-back">
								 <div class="men-cart-pro">
									 <div class="inner-men-cart-pro">
										 <a href="{!! route('productdetail',$product_list->id) !!}" class="link-product-add-cart">Quick View</a>
									 </div>
								 </div>
								 <span class="product-new-top">New</span>

						 </div>
						 <div class="item-info-product ">
							 <h4><a href="{!! route('productdetail',$product_list->id) !!}">{{$product_list->name}}</a></h4>
							 <div class="info-product-price">
								 <span class="item_price">{{ number_format($product_list->price,0,',','.')}} đ </span>
								 <del>{{ number_format($product_list->sale,0,',','.')}} đ </del>
							 </div>
							 <a href="{!! url('addcart',$product_list->id) !!}" class="item_add single-item hvr-outline-out button2">Add to cart</a>
						 </div>
					 </div>
				 </div>
	 <!-- end hiển thị sản phẩm mới-->
  @endforeach
					</div>

					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
	@foreach ($product_newshow as $product)
	  <!-- hiển thị sản phẩm khuyến mãi -->
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{!! ('images/'.$product->image) !!}" alt="" class="pro-image-front">
									<img src="{!! ('images/'.$product->image) !!}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{!! route('productdetail',$product->id) !!}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">Sale</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="{!! route('productdetail',$product->id) !!}">{{$product->name}}</a></h4>
									<div class="info-product-price">
										<span class="item_price">{{ number_format($product->price,0,',','.')}} đ </span>
										<del>{{ number_format($product->sale,0,',','.')}} đ</del>
									</div>
									<a href="{!! url('addcart',$product->id) !!}" class="item_add single-item hvr-outline-out button2">Add to cart</a>
								</div>
							</div>
						</div>
	<!-- end hiển thị sản phẩm khuyến mãi -->
@endforeach
					</div>
				</div>
		 	</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>
