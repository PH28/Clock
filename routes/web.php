<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'category'],function(){
    // Route::post('search',[
    // 'as'=>'category.search',
    // 'uses'=>'CategoryController@getsearch']);
    Route::get('add',[
      'as' => 'category.getAdd',
      'uses' => 'CategoryController@getAdd']);
    Route::post('add',[
      'as' => 'category.postAdd',
      'uses' => 'CategoryController@postAdd']);
    Route::get('list',[
      'as' => 'category.getList',
      'uses' => 'CategoryController@getList']);
    Route::get('delete/{id}',[
      'as' => 'category.getDelete',
      'uses' => 'CategoryController@getDelete']);
    Route::get('edit/{id}',[
      'as' => 'category.getEdit ',
      'uses' => 'CategoryController@getEdit']);
    Route::post('edit/{id}',[
      'as' => 'category.postEdit',
      'uses' => 'CategoryController@postEdit']);
      });
