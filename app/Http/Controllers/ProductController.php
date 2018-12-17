<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use DB;
use Illuminate\Http\Request;
use App\Image;
// use Illuminate\Http\File;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
      $data = Product::select('id','name','price','cat_id','made','image')->paginate(5);
      foreach ($data as $datas) {
        $category = DB::table('category')
                     ->where('id',$datas->cat_id)
                     ->first();
      }
      return view("backend.product.list",compact('data','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
          $data = Category::all();
          return view('backend.product.add',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postAdd(Request $request)
    {
      $product = new Product;
      $product->name = $request->name;
      $product->price = $request->price;
      $product->made = $request->made;
      $product->content = $request->content;
      $product->cat_id = $request->cat_id;
      $product->description =$request->description;
      $product->status = '1';
      if($request->hasFile('image')){
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $image = str_random(4)."_".$name;
        while(file_exists('images/'.$image)){
          $image = str_random(4)."_".$name;
        }
        $file->move('images/',$image);
        $product->image = $image;
      }else{
        $product->image = "";
      }
        $product->save();
     return redirect()->route('product.getAdd')->with(['thongbao' =>'Bạn đã thêm sản phẩm thành công']);
     }

    //  $product = $request->all();         // ko mở được file hình ảnh khi list
    //  $post = Product::create($product);
    //  $post->fill(['status' => '1']);
    //  if($request->hasFile('image')){
    //    $file = $request->file('image');
    //    $name = $file->getClientOriginalName();
    //    $image = str_random(4)."_".$name;
    //    while(file_exists('images/'.$image)){
    //      $image = str_random(4)."_".$name;
    //    }
    //    $file->move('images/',$image);
    //    $post->image = $image;
    //  }else{
    //    $post->image = "";
    //  }
    //  return redirect()->route('product.getAdd')->with(['thongbao' =>'Bạn đã thêm sản phẩm thành công']);
    // }


    /**
     * Display the specified resource.
     *
     * @param  \App\ProductController  $productController
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductController  $productController
     * @return \Illuminate\Http\Response
     */
     public function getEdit($id)
     {
      $cat = Category::all();
      $product = Product::find($id);
      return view('backend.product.edit',compact('cat','product'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductController  $productController
     * @return \Illuminate\Http\Response
     */
    public function postEdit(Request $request,$id)
    {
      $product = Product::find($id);
      $img_current = 'images/'.$request->img_current;
      $product->name = $request->name;
      $product->price = $request->price;
      $product->made = $request->made;
      $product->content = $request->content;
      $product->cat_id = $request->cat_id;
      $product->description =$request->description;
      $product->status = $request->status;
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
       return redirect()->route('product.getList');
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductController  $productController
     * @return \Illuminate\Http\Response
     */
    public function getDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.getList');
    }
}
