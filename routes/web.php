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

// Route::get('/', function () {
//     return view('backend.index');
// });
  Route::get('/', [
    'as' =>'index',
    'uses' => 'PageController@index']);

  Route::get('/admin/login',['as'=> 'admin.getLogin','uses'=>'LoginController@getLogin']);
  Route::post('/admin/login',['as'=> 'admin.postLogin','uses'=>'LoginController@postLogin']);
  Route::get('/admin/logout',['as'=>'admin.logout','uses'=>'LoginController@logout']);

  Route::get('/backend/home',[
    'as' => 'backend.index',
    'middleware' => 'checklogin',
    'uses' => 'HomeController@index']);

Route::group(['prefix' =>'backend','middleware' => 'checklogin'],function(){
  Route::group(['prefix' => 'admin'],function(){
  //     // Route::post('search',[
  //     // 'as'=>'category.search',
  //     // 'uses'=>'CategoryController@getsearch']);
      Route::get('add',[
        'as' => 'backend.admin.create',
        'uses' => 'AdminController@create']);
      Route::post('add',[
        'as' => 'backend.admin.store',
        'uses' => 'AdminController@store']);
      Route::get('list',[
        'as' => 'backend.admin.index',
        'uses' => 'AdminController@index']);
      Route::get('delete/{id}',[
        'as' => 'backend.admin.destroy',
        'uses' => 'AdminController@destroy']);
      Route::get('edit/{id}',[
        'as' => 'backend.admin.edit ',
        'uses' => 'AdminController@edit']);
      Route::post('edit/{id}',[
        'as' => 'backend.admin.update',
        'uses' => 'AdminController@update']);
    });


Route::group(['prefix' => 'category'],function(){
//     // Route::post('search',[
//     // 'as'=>'category.search',
//     // 'uses'=>'CategoryController@getsearch']);
    Route::get('add',[
      'as' => 'backend.category.create',
      'uses' => 'CategoryController@create']);
    Route::post('add',[
      'as' => 'backend.category.store',
      'uses' => 'CategoryController@store']);
    Route::get('list',[
      'as' => 'backend.category.index',
      'uses' => 'CategoryController@index']);
    Route::get('destroy/{id}',[
      'as' => 'backend.category.destroy',
      'uses' => 'CategoryController@destroy']);
    Route::get('edit/{id}',[
      'as' => 'backend.category.edit',
      'uses' => 'CategoryController@edit']);
    Route::post('edit/{id}',[
      'as' => 'backend.category.update',
      'uses' => 'CategoryController@update']);
      });
Route::group(['prefix' => 'product'],function(){
//     // Route::post('search',[
//     // 'as'=>'backend.category.search',
//     // 'uses'=>'CategoryController@getsearch']);
    Route::get('add',[
      'as' => 'backend.product.create',
      'uses' => 'ProductController@create']);
    Route::post('add',[
      'as' => 'backend.product.store',
      'uses' => 'ProductController@store']);
    Route::get('list',[
      'as' => 'backend.product.index',
      'uses' => 'ProductController@index']);
    Route::get('delete/{id}',[
      'as' => 'backend.product.destroy',
      'uses' => 'ProductController@destroy']);
    Route::get('edit/{id}',[
      'as' => 'backend.product.edit ',
      'uses' => 'ProductController@edit']);
    Route::post('edit/{id}',[
      'as' => 'backend.product.update',
      'uses' => 'ProductController@update']);
  });
  Route::group(['prefix' => 'user'],function(){
      Route::get('list',[
        'as' => 'backend.user.index',
        'uses' => 'UserController@index']);
      Route::get('delete/{id}',[
        'as' => 'backend.user.destroy',
        'uses' => 'UserController@destroy']);
        });
});

// Quản lí thông tin người dùng

  Route::get('register',[                    // đăng ký người dùng
    'as'=> 'register',
    'uses'=> 'LoginController@create',
  ]);
  Route::post('register',[
    'as'=> 'register',
    'uses'=> 'LoginController@store',
  ]);
  Route::get('login',[                       // đăng nhập người dùng
    'as'=> 'login',
    'uses'=> 'LoginController@getUser',
  ]);
  Route::post('login',[
    'as'=> 'login',
    'uses'=> 'LoginController@postUser',
  ]);
  Route::get('logout',[                      // đăng xuất người dùng
    'as'=> 'logout',
    'uses'=> 'LoginController@logoutUser',
  ]);
  Route::get('productdetail/{id}',[          // vào trang xem chi tiết sản phẩm
    'as' => 'productdetail',
    'uses'=> 'PageController@productdetail'
  ]);
  Route::get('showcart',[                    // vào trang xem giỏ hàng
    'as' => 'showcart',
    'uses'=> 'CartController@showcart'
  ]);
  Route::get('addcart/{id}',[                // thêm vào giỏ hàng
    'as' => 'addcart',
    'uses'=> 'CartController@addcart'
  ]);
  Route::get('destroycart',[                 // xóa giỏ hàng
    'as' => 'destroycart',
    'uses'=> 'CartController@destroycart'
  ]);
  Route::get('removecart/{id}',[             // xóa sản phẩm trong giỏ hàng
    'as' => 'removecart',
    'uses'=> 'CartController@removecart'
  ]);
  Route::get('updatecart',[                  // cập nhật số lượng trong giỏ hàng
    'as' => 'updatecart',
    'uses'=> 'CartController@updatecart'
  ]);
  Route::get('payment',[                     // thanh toán
    'as' => 'payment',
    'uses'=> 'CartController@payment'
  ]);
  Route::post('payment',[                     // thanh toán
    'as' => 'postpayment',
    'uses'=> 'CartController@postpayment'
  ]);






  Route::get('category',[                    // vào trang hiển thị tất cả sản phẩm
    'as' => 'category',
    'uses'=> 'PageController@category'
  ]);
  Route::post('comment',[                    // xử lí thông tin comment sản phẩm
    'as' => 'comment',
    'uses'=> 'PageController@comment'
  ]);
