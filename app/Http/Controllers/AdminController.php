<?php
namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        $admin = User::all();
        return view('backend.admin.list',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        return view('backend.admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postAdd(AdminRequests $request)
    {
       // $data = $request->all();        // query bằng eloquent ko validation được
       // $admin = Admin::create($data);
       // return redirect()->route('admin.getList')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
       $admin = new User;
       $admin->name = $request->name;
       $admin->email = $request->email;
       $admin->phone = $request->phone;
       $admin->password = bcrypt($request->password);
       $admin->level = $request->level;
       $admin->status = $request->status;
       $admin->remember_token = $request->_token;
       $admin->save();
       return redirect()->route('admin.getList')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $data = User::find($id);
        return view('backend.admin.edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function postEdit(Request $request,$id)
    {
      $this->validate($request,
        [
         'name'   => 'required|min:3',
         'phone'   => 'required|min:3',
         'password'  => 'required|min:6|confirmed',     // xác nhận lại mật khẩu(validation)
         'password_confirmation'  => 'required|min:4',
         'level'  => 'required',
         'status'  => 'required',
        ],
        [
         'name.required'   => 'Vui lòng nhập họ tên',
         'name.min'   => 'Họ tên lớn hơn 3 ký tự.',
         'phone.required'=>'Vui lòng nhập số điện thoại',
         'phone.min'=>'Số điện thoại không nhỏ hơn 3',
         'password.required'  => 'Vui lòng nhập mật khẩu',
         'password.min'  => 'Mật khẩu phải lớn hơn 6 ký tự',
         'password.confirmed'  => 'Mật khẩu không khớp',
         'password_confirmation.required'  => 'Vui lòng nhập lại mật khẩu',
         'password_confirmation.min'  => 'Mật khẩu phải lớn hơn 6 ký tự',
         'level.required'  => 'Vui lòng chọn quyền cho tài khoản',
         'status.required'  => 'Vui lòng chọn checkbox cho tài khoản',
        ]
      );
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->password = bcrypt($request->password);
        $data->level = $request->level;
        $data->status = $request->status;
        $data->remember_token = $request->_token;
        $data->save();
        return redirect()->route('admin.getList')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminController $adminController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminController  $adminController
     * @return \Illuminate\Http\Response
     */
    public function getDelete($id)
    {
        $user_login = Auth::user()->level;
        // dd($user_login);
        $data = User::find($id);
        if ($data['level'] == 10 || ($user_login != 10 && $data['level'] == 1)) {
          return redirect()->route('admin.getList')->with(['flash_level1'=>'result_msg','error_massage'=>'Bạn không được phép xóa thành viên này']);
      }else {
          // $data->delete($id);
          return redirect()->route('admin.getList')->with(['flash_level'=>'result_msg','flash_massage'=>'Bạn đã xóa thành viên thành công']);
      }
    }
}
