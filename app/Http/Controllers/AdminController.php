<?php
namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequests;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

// Vào trang list admin
    public function index()
    {
        $admin = User::all();
        return view('backend.admin.list',compact('admin'));
    }

// Vào trang thêm admin
    public function create()
    {
        return view('backend.admin.add');
    }

// xử lí admin thêm vào
    public function store(AdminRequests $request)
    {
       $data = $request->all();
       $data['password'] = Hash::make($data['password']);
       $admin = User::create($data);
       return redirect()->route('admin.create')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }

// Vào trang sửa admin
    public function edit($id)
    {
        $data = User::find($id);
        return view('backend.admin.edit',compact('data'));
    }

// Xử lí thông tin sửa admin
    public function update(AdminRequests $request,$id)
    {
           $data = User::find($id);
           $update = $request->all();
           $update['password'] = Hash::make('password');
           $data->update($update);
        return redirect()->route('admin.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }

// Xóa admin
    public function destroy($id)
    {
        $user_login = Auth::user()->level;
        // dd($user_login);
        $data = User::find($id);
        if ($data['level'] == 10 || ($user_login != 10 && $data['level'] == 1)) {
          return redirect()->route('admin.index')->with(['flash_level1'=>'result_msg','error_massage'=>'Bạn không được phép xóa thành viên này']);
      }else {
          $data->delete();
          return redirect()->route('admin.index')->with(['flash_level'=>'result_msg','flash_massage'=>'Bạn đã xóa thành viên thành công']);
      }
    }
}
