<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Category;
use App\Product;
use App\Comment;
use App\User;
use DB;

class PageController extends Controller
{

// vào trang list các sản phẩm
    public function index()
    {
       $product_show = Product::all()->take(8);
       $product_newshow = Product::all()->where('sale','>',0)->take(8);
       $category_show = Category::all();
       return view('frontend.index',compact('product_show','category_show','product_newshow'));
    }

// vào trang chi tiết sản phẩm
    public function productdetail($id)
    {
      $comments = Comment::all()->take(5);  // sắp xếp theo những cái mới nhất
      $productdetail = Product::find($id);
      return view('frontend.pages.productdetail',compact('productdetail','comments'));
    }

// vào trang xem tất cả sản phẩm và danh mục
    public function category()
    {
      $products  = Product::paginate(8);
      $category  = Category::all()->where('parent_id',0);  // lấy ra các danh mục không có danh mục con
      foreach ($category as $value) {
      $categorys = Category::all()->where('parent_id',$value->id);
      }
      return view('frontend.pages.category',compact('products','categorys','category'));
    }

// xử lí comment
     public function comment(Request $request)
     {
       $comment = $request->all();
       // $comment = htmlentities(htmlspecialchars($_GET['content']));
       $data    = Comment::create($comment);
       return redirect()->route('index');

     }
}
