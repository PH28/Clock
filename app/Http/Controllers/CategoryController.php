<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequests;

class CategoryController extends Controller
{

    public function getList()
    {
        $data = Category::all();
        return view('backend.category.list',['data'=>$data]);
    }


    public function getAdd()
    {
      $data = Category::all();
      return view('backend.category.add',['data'=>$data]);
    }

    public function postAdd(CategoryRequests $request)
    {


      // $data = $request->all();
      // $category = Category::create($data);
      // return view('backend.category.list',['data'=>$data]);
      $category = new Category;
      $category->name = $request->name;
      $category->parent_id = $request->parent_id;
      $category->save();
      return redirect()->route('category.getAdd')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
      $cat = Category::all();
      $data = Category::findOrFail($id);
      return view ('backend.category.edit',['cat'=>$cat,'data'=>$data]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function postEdit(Request $request,$id)
    {
      $category = Category::find($id);
      $category->name = $request->name;
      $category->parent_id = $request->parent_id;
      $category->save();
      return redirect()->route('category.getList');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function getDelete($id)
    {
      $category = Category::find($id);
      // $parent = Category::where('prarent_id',$id)->count();
      // $products = Product::where('cate_id', $cate->id)->count();
      // dd($products);
      // if($parent == 0 && $products == 0){
        $category->delete($id);
        return redirect()->route('category.getList');
      // }else{
      //   return redirect()->route('category.getList')->with(['flash_level' => 'danger','flash_message' =>'Vui lòng xóa hết danh mục con trước và kiểm tra danh mục có sản phẩm đang tồn tại']);
      // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
