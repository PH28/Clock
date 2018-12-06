<?php

namespace App\Http\Controllers;

use App\Cat;  // nhớ khai báo tên models khi muốn sử dụng dữ liệu từ models đó.
use App\Breed;
use Illuminate\Http\Request;

class BreedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $breeds = Breed::all();
      return view('breeds.index', compact('breeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $breed_id = $id;
        $cats = Cat::where('breed_id',$id)
                ->orderBy('name', 'desc')
                ->get();
        return view('breeds.list_cat_id_breeds',compact('cats','breed_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function edit(Breeds $breeds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Breeds $breeds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breeds $breeds)
    {
        //
    }
}
