<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequests;
use App\Http\Requests\UserRequests;

class LoginController extends Controller
{

// Vào trang đăng nhập admin
  public function getLogin()
  {
    return view('admin.login');
  }

// Xử lí đăng nhập đăng nhập admin
  public function postLogin(LoginRequests $request)
  {
    if(Auth::attempt(['email'=> $request->email,'password'=> $request->password,'roles'=>1]))
    {
     return redirect()->route('backend.index');
    }else{
       return redirect()->route('admin.getLogin');
    }
  }

// Đăng xuất admin
  public function logout()
  {
      Auth::logout();
      return redirect()->route('admin.getLogin');
  }

// Đăng kí người dùng
   public function create()
   {
     return view('frontend.index');
   }

// xử lí dữ liệu đăng kí người dùng
   public function store(UserRequests $request)
   {
     $data = $request->all();
     $data['password'] = Hash::make($data['password']);
     $user = User::create($data);
     return redirect()->route('index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']); // trả về thông báo đã đăng kí thành công
   }

//  vào trang đăng nhập người dùng
   public function getUser()
   {
     return view('frontend.layout.login');
   }

// kiểm tra đăng nhập người dùng
   public function postUser(Request $request)
   {
     if(Auth::attempt(['email'=> $request->email,'password'=> $request->password,'roles'=>0]))
     {
      return redirect()->route('index');  // đi vào trang người dùng
     }else{
       if(Auth::attempt(['email'=> $request->email,'password'=> $request->password,'roles'=>1]))
       {
        return redirect()->route('backend.index');  // đi vào trang admin
      }else {
        return view('frontend.pages.register');  //trả về trang đăng kí tài khoản pages vs một thông báo tài khoản ko chính xác đăng nhập lại hoặc đăng kí
      }
          }
   }

// Đăng xuất người dùng
     public function logoutUser()
     {
         Auth::logout();
         return view('frontend.index');
     }

}
