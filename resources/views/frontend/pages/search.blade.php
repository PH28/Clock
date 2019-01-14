@extends('frontend.master')
@section('content')

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

@endsection
