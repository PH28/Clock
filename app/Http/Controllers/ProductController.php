<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\OrderDetail;
use App\Order;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequestsStore;
use App\Http\Requests\ProductRequestsUpdate;
use App\Image;
use File;

class ProductController extends Controller
{

// vào trang list các sản phẩm
    public function index()
    {
       $products = Product::with('category')->paginate(5);
       return view("backend.product.list",compact('products','category'));
    }

// Vào trang thêm sản phẩm
    public function create()
    {
        $data = Category::all();
        return view('backend.product.add',compact('data'));
    }

// Xử lí sản phẩm thêm vào
    public function store(ProductRequestsStore $request)
    {
     $product = $request->all();
     if($request->hasFile('image')){
       $file = $request->file('image');
       $name = $file->getClientOriginalName();
       $image = str_random(4)."_".$name;
       while(file_exists('images/'.$image)){
         $image = str_random(4)."_".$name;
       }
       $file->move('images/',$image);
       $product['image'] = $image;
     }else{
       $product->image = "";
     }
      $store = Product::create($product);
      return redirect()->route('backend.product.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm sản phẩm  thành công !']);
     }

//  Vào trang sửa sản phẩm
     public function edit($id)
     {
       $cate = Category::all();
       $product = Product::find($id);
       return view('backend.product.edit',compact('cate','product'));
     }

// Xử lí sửa sản phẩm
    public function update(ProductRequestsUpdate $request,$id)
    {
       $product = Product::find($id);
       $img_current = 'images/'.$request->img_current;
       $product->cate_id = $request->cate_id;
       $product->name = $request->name;
       $product->price = $request->price;
       $product->sale = $request->sale;
       $product->made = $request->made;
       $product->description = $request->description;
       $product->content = $request->content;
       $product->status = $request->status;
     // update ảnh
      if($request->hasFile('fileimages')){
        $file = $request->file('fileimages');
        $name = $file->getClientOriginalName();
        $image = str_random(4)."_".$name;
        while(file_exists('images/'.$image)){
          $image = str_random(4)."_".$name;
        }
        $file->move('images/',$image);
        File::delete($img_current);
        $product->image = $image;
       }
       $product->save();
      return redirect()->route('backend.product.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa sản phẩm thành công !']);
     }

// Xóa sản phẩm
    public function destroy($id)
    {
        $product = Product::find($id);
        $order   = OrderDetail::where('product_id', $product->id)->get();
        if ($order->count() > 0) {
        return redirect()->route('backend.product.index')->with(['flash_level1'=>'result_msg','error_massage'=>' Bạn không thể xóa sản phẩm đang được đặt hàng !']);
      }else{
        File::delete('images/'.$product->image);
        $product->delete();
        return redirect()->route('backend.product.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã xóa !']);
      }
    }

// tìm kiếm sản phẩm
    public function search(Request $request)
    {
      $search = $request->get('search');
           if($search != ''){
               $products = Product::where('id', 'like', '%'.$search.'%')
                       ->orWhere('name', 'like', '%'.$search.'%')
                       ->orWhere('price', 'like', '%'.$search.'%')
                       ->orderBy('id', 'desc')->paginate(5);
           }
           else{
               $products = Product::orderBy('id', 'desc')->paginate(5);
           }
       return view('backend.product.list',compact('products'));
    }
}
