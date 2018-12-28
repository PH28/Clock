
<div class="sap_tabs">
	<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		<ul class="resp-tabs-list">
			<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li>
			<!-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
			<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li> -->
		</ul>
		<div class="resp-tabs-container">
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
	@foreach ($product_show as $product_list)
	    <!--hiển thị sản phẩm -->
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
							 <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
						 </div>
					 </div>
				 </div>
	 <!-- end hiển thị sản phẩm -->
  @endforeach
					</div>
				</div>
		 	</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>
