<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequests;

class CategoryController extends Controller
{

// Vào trang index
    public function index()
    {
        $datas = Category::all();
        foreach ($datas as $data){
        $category = DB::table('category')->where('id',$data->parent_id)->first();
        }
        return view('backend.category.list',compact('datas','category'));
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
       return redirect()->route('backend.category.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
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
      return redirect()->route('backend.category.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
     }

// Xóa danh mục
     public function destroy($id)
     {
      $category = Category::find($id);
      $data = Category::where('parent_id',$id)->count();  // count đếm số phần tử trong mảng
      $product = Product::where('cate_id', $category->id)->count();
      // dd($products);
      if($data == 0 && $product == 0){
        $category->delete($id);
       return redirect()->route('backend.category.index')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa thành công !']);
      }else{
        return redirect()->route('backend.category.index')->with(['flash_level1' => 'result_msg','error_massage' =>'Vui lòng xóa hết danh mục con trước và kiểm tra danh mục có sản phẩm đang tồn tại']);
      }
     }
 }
