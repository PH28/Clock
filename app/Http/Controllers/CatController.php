<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $cat = Cat::all();                         // cách 1 dùng models Cat
      // return view('cats.index', compact('cat'));
      $cat = DB::table('cats')->get();              // cách 2 dùng DB
      return view('cats.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $name = $request->get('name');     // tạo giá trị mới lên database cách 1.
      $email= $request->get('email');
      $catData= [
          'name' => $name,
          'email' => $email,
                ];
      $cat = Cat::create($catData);
      return redirect()->route('cats.index');
      // $catData = $request->all();    // tạo giá trị lên database cách 2.
      // $cat = Cat::create($catData);
      // return redirect()->route('cats.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $cat = Cat::find($id);
          return view('cats.edit', compact('cat'));
          // $cat = DB::table('cats')                // logic chưa thành công.
		      //        ->where('id', $id)
		      //        ->get();
          // return view('cats.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      // $data = $request->all();            // cách 1 sử dụng request và (Cat $id).
      // $cat->update($data);
      // return redirect()->route('cats.index');

      $name = $request->get('name');        //cách 2 sử dụng DB với request và $id.
      $email= $request->get('email');
      DB::table('cats')
      	->where('id', $id)
      	->update([
                 'name' => $name,
                 'email' => $email,
                	]);
     return redirect()->route('cats.index');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      // $cat->delete();                         // xóa bằng cách 1 giá trị truyên vào(Cat $cat)
      // return redirect()->route('cats.index');


     $cat = Cat::find($id);  // xóa bằng cách 2 truyền vào giá trị $id.
     $cat->delete();
     return redirect()->route('cats.index');

    }

   }
