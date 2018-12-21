<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequests;
use App\Image;
use File;

class ProductController extends Controller
{

// vào trang list các sản phẩm
    public function index()
    {
      $data = DB::table('products')->paginate(5);
      foreach ($data as $datas) {
        $category = DB::table('category')          // gọi ra tên danh mục
                     ->where('id',$datas->cate_id)
                     ->first();
       }
      return view("backend.product.list",compact('data','category'));
    }

// Vào trang thêm sản phẩm
    public function create()
    {
      $data = Category::all();
        return view('backend.product.add',compact('data'));
    }

// Xử lí sản phẩm thêm vào
    public function store(ProductRequests $request)
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
      return redirect()->route('product.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm sản phẩm  thành công !']);
     }

//  Vào trang sửa sản phẩm
     public function edit($id)
     {
       $cate = Category::all();
       $product = Product::find($id);
       return view('backend.product.edit',compact('cate','product'));
     }

// Xử lí sửa sản phẩm
    public function update(Request $request,$id)
    {
      $this->validate($request,
      [
          'name' => 'required',
          'price'=>'required',
          'sale'=>'required',
          'made'=>'required',
          'description'=>'required',
          'content' => 'required',
      ],
      [
        'name.required' => 'Vui lòng nhập tên sản phẩm',
        'price.required'=>'Vui lòng nhập giá cho sản phẩm',
        'sale.required'=>'Vui lòng nhập 0 nếu sản phẩm không có khuyến mãi',
        'made.required'=>'Vui lòng nhập thương hiệu cho sản phẩm',
        'content.required'=>'Vui lòng nhập nội dung chi tiết cho sản phẩm',
        'description.required'=>'Vui lòng nhập nội dung cho sản phẩm',
      ]);
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
      return redirect()->route('product.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa phẩm  thành công !']);
     }

// Xóa sản phẩm
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
