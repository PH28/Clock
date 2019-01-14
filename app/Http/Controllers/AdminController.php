<?php
namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequestsStore;
use App\Http\Requests\AdminRequestsUpdate;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

// Vào trang list admin
    public function index()
    {
        $admin = User::orderBy('id', 'desc')->where('roles',1)->paginate(5);
        // $admin = User::all()->where('roles',1);
        return view('backend.admin.list',compact('admin'));
    }

// Vào trang thêm admin
    public function create()
    {
        return view('backend.admin.add');
    }

// xử lí admin thêm vào
    public function store(AdminRequestsStore $request)
    {
       $data = $request->all();
       $data['password'] = Hash::make($data['password']);
       $user_login = Auth::user()->level;   // admin đang đăng nhập.
       if($user_login == 10) {
       $admin = User::create($data);
       return redirect()->route('backend.admin.create')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
     }else {
       return redirect()->route('backend.admin.create')->with(['flash_level1'=>'result_msg','error_massage'=>'Bạn không được quyền thêm admin!']);
     }
    }

// Vào trang sửa admin
    public function edit($id)
    {
        $data = User::find($id);
        return view('backend.admin.edit',compact('data'));
    }

// Xử lí thông tin sửa admin
    public function update(AdminRequestsUpdate $request,$id)
    {
           $data = User::find($id);
           $update = $request->all();
           // $update['password'] = Hash::make('password');
           $user_login = Auth::user()->level;   // admin đang đăng nhập.
           if  (($user_login != 10 && $data['level'] == 1) || ($data['level'] == 10 && $user_login != 10)) {
             return redirect()->route('backend.admin.index')->with(['flash_level1'=>'result_msg','error_massage'=>'Bạn không được quyền sửa thông tin !']);
           }else {
             $data->update($update);
             return redirect()->route('backend.admin.index')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã sửa thành công']);
           }

    }

// Xóa admin
    public function destroy($id)
    {
        $user_login = Auth::user()->level;   // admin đang đăng nhập.
        // dd($user_login);
        $data = User::find($id);   // admin cần xóa.
        if ($data['level'] == 10 || ($user_login != 10 && $data['level'] == 1)) {
          return redirect()->route('backend.admin.index')->with(['flash_level1'=>'result_msg','error_massage'=>'Bạn không được phép xóa thành viên này']);
      }else {
          $data->delete();
          return redirect()->route('backend.admin.index')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa thành công']);
      }
    }
    public function search(Request $request)
    {
      $search = $request->get('search');
           if($search != ''){
               $admin = User::where('id', 'like', '%'.$search.'%')
                       ->orWhere('name', 'like', '%'.$search.'%')
                       ->orWhere('email', 'like', '%'.$search.'%')
                       ->orWhere('phone', 'like', '%'.$search.'%')
                       ->orderBy('id', 'desc')->paginate(5);
           }
           else{
               $admin = User::orderBy('id', 'desc')->where('roles',1)->paginate(5);
           }
       return view('backend.admin.list',compact('admin'));
    }

}
