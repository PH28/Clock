<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequests;

class LoginController extends Controller
{
  public function getLogin()
  {

    return view('admin.login');

  }
  public function postLogin(LoginRequests $request)
  {
    if(Auth::attempt(['email'=> $request->email,'password'=> $request->password,'roles'=>1]))
    {
     return view('backend.index');
    }else{
       return redirect()->route('admin.getLogin');
    }
  }
  public function logout()
  {
      Auth::logout();
      return redirect()->route('admin.getLogin');
  }

}
