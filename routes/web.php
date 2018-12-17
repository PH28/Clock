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
    return view('backend.index');
});
//
Route::group(['prefix' => 'category'],function(){
//     // Route::post('search',[
//     // 'as'=>'category.search',
//     // 'uses'=>'CategoryController@getsearch']);
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
Route::group(['prefix' => 'product'],function(){
//     // Route::post('search',[
//     // 'as'=>'category.search',
//     // 'uses'=>'CategoryController@getsearch']);
    Route::get('add',[
      'as' => 'product.getAdd',
      'uses' => 'ProductController@getAdd']);
    Route::post('add',[
      'as' => 'product.postAdd',
      'uses' => 'ProductController@postAdd']);
    Route::get('list',[
      'as' => 'product.getList',
      'uses' => 'ProductController@getList']);
    Route::get('delete/{id}',[
      'as' => 'product.getDelete',
      'uses' => 'ProductController@getDelete']);
    Route::get('edit/{id}',[
      'as' => 'product.getEdit ',
      'uses' => 'ProductController@getEdit']);
    Route::post('edit/{id}',[
      'as' => 'product.postEdit',
      'uses' => 'ProductController@postEdit']);
  });

  Route::group(['prefix' => 'user'],function(){
      Route::get('list',[
        'as' => 'user.getList',
        'uses' => 'UserController@getList']);
      Route::get('delete/{id}',[
        'as' => 'user.getDelete',
        'uses' => 'UserController@getDelete']);  
        });

Route::group(['prefix' => 'admin'],function(){
//     // Route::post('search',[
//     // 'as'=>'category.search',
//     // 'uses'=>'CategoryController@getsearch']);
    Route::get('add',[
      'as' => 'admin.getAdd',
      'uses' => 'AdminController@getAdd']);
    Route::post('add',[
      'as' => 'admin.postAdd',
      'uses' => 'AdminController@postAdd']);
    Route::get('list',[
      'as' => 'admin.getList',
      'uses' => 'AdminController@getList']);
    Route::get('delete/{id}',[
      'as' => 'admin.getDelete',
      'uses' => 'AdminController@getDelete']);
    Route::get('edit/{id}',[
      'as' => 'admin.getEdit ',
      'uses' => 'AdminController@getEdit']);
    Route::post('edit/{id}',[
      'as' => 'admin.postEdit',
      'uses' => 'AdminController@postEdit']);
  });


  Route::get('/admin/login',['as'=> 'admin.getLogin','uses'=>'LoginController@getLogin']);
  Route::post('/admin/login',['as'=> 'admin.postLogin','uses'=>'LoginController@postLogin']);
  Route::get('/admin/logout',['as'=>'admin.logout','uses'=>'LoginController@logout']);
