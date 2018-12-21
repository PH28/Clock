<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequests;

class CategoryController extends Controller
{

// Vào trang index
    public function index()
    {
        $data = Category::all();
         return view('backend.category.list',['data'=>$data]);
    }

// Vào trang thêm danh mục, create
    public function create()
    {
        $data = Category::all();
         return view('backend.category.add',['data'=>$data]);
    }

// Xử lí thêm danh mục
    public function store(CategoryRequests $request)
    {
      $category = Category::create($request->all());
       return redirect()->route('category.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }

// Vào trang sửa danh mục
     public function edit($id)
     {
       $cate = Category::all();
       $data = Category::find($id);
        return view ('backend.category.edit',compact('data','cate'));
     }

// Xử lí sửa danh mục
     public function update(CategoryRequests $request,$id)
     {
      $category = Category::find($id);
      $update = $request->all();
      $category->update($update);
      return redirect()->route('category.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
     }

// Xóa danh mục
     public function destroy($id)
     {
      $category = Category::find($id);
      // $parent = Category::where('prarent_id',$id)->count();
      // $products = Product::where('cate_id', $cate->id)->count();
      // dd($products);
      // if($parent == 0 && $products == 0){
      $category->delete();
       return redirect()->route('category.index')->with(['flash_level'=>'result_msg','flash_massage'=>'Bạn đã xóa thanh công!']);
      // }else{
      //   return redirect()->route('category.index')->with(['flash_level' => 'danger','flash_message' =>'Vui lòng xóa hết danh mục con trước và kiểm tra danh mục có sản phẩm đang tồn tại']);
      // }
     }
 }
