<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Product;
use DB;

class PageController extends Controller
{

// vào trang list các sản phẩm
    public function index()
    {
       $product_show = Product::all();
       // $category_show = Category::all();
       return view('frontend.index',compact('product_show'));
    }

// vào trang chi tiết sản phẩm
    public function productdetail($id)
    {
      $productdetail = Product::find($id);
      return view('frontend.pages.productdetail',compact('productdetail'));
    }

// vào trang xem giỏ hàng
    public function cart()
    {
      return view('frontend.pages.cart');
    }

// vào trang xem tất cả sản phẩm và danh mục
    public function category()
    {
      $products  = Product::all();
      return view('frontend.pages.category',compact('products'));
    }
}
