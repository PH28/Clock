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
      'as' => 'category.create',
      'uses' => 'CategoryController@create']);
    Route::post('add',[
      'as' => 'category.store',
      'uses' => 'CategoryController@store']);
    Route::get('list',[
      'as' => 'category.index',
      'uses' => 'CategoryController@index']);
    Route::get('destroy/{id}',[
      'as' => 'category.destroy',
      'uses' => 'CategoryController@destroy']);
    Route::get('edit/{id}',[
      'as' => 'category.edit',
      'uses' => 'CategoryController@edit']);
    Route::post('edit/{id}',[
      'as' => 'category.update',
      'uses' => 'CategoryController@update']);
      });
Route::group(['prefix' => 'product'],function(){
//     // Route::post('search',[
//     // 'as'=>'category.search',
//     // 'uses'=>'CategoryController@getsearch']);
    Route::get('add',[
      'as' => 'product.create',
      'uses' => 'ProductController@create']);
    Route::post('add',[
      'as' => 'product.store',
      'uses' => 'ProductController@store']);
    Route::get('list',[
      'as' => 'product.index',
      'uses' => 'ProductController@index']);
    Route::get('delete/{id}',[
      'as' => 'product.destroy',
      'uses' => 'ProductController@destroy']);
    Route::get('edit/{id}',[
      'as' => 'product.edit ',
      'uses' => 'ProductController@edit']);
    Route::post('edit/{id}',[
      'as' => 'product.update',
      'uses' => 'ProductController@update']);
  });

  Route::group(['prefix' => 'user'],function(){
      Route::get('list',[
        'as' => 'user.index',
        'uses' => 'UserController@index']);
      Route::get('delete/{id}',[
        'as' => 'user.destroy',
        'uses' => 'UserController@destroy']);
        });

Route::group(['prefix' => 'admin'],function(){
//     // Route::post('search',[
//     // 'as'=>'category.search',
//     // 'uses'=>'CategoryController@getsearch']);
    Route::get('add',[
      'as' => 'admin.create',
      'uses' => 'AdminController@create']);
    Route::post('add',[
      'as' => 'admin.store',
      'uses' => 'AdminController@store']);
    Route::get('list',[
      'as' => 'admin.index',
      'uses' => 'AdminController@index']);
    Route::get('delete/{id}',[
      'as' => 'admin.destroy',
      'uses' => 'AdminController@destroy']);
    Route::get('edit/{id}',[
      'as' => 'admin.edit ',
      'uses' => 'AdminController@edit']);
    Route::post('edit/{id}',[
      'as' => 'admin.update',
      'uses' => 'AdminController@update']);
  });


  Route::get('/admin/login',['as'=> 'admin.getLogin','uses'=>'LoginController@getLogin']);
  Route::post('/admin/login',['as'=> 'admin.postLogin','uses'=>'LoginController@postLogin']);
  Route::get('/admin/logout',['as'=>'admin.logout','uses'=>'LoginController@logout']);
