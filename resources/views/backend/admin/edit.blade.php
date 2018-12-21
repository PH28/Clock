@extends('backend.layout.master')
@section('controller','Admin')
@section('action','Sửa')
@section('content')
@include('backend.block.flash_mag')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
          	@include('backend.block.errors')
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Table</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="{!!route('admin.update',$data->id)!!}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="card-body">
              <div class="form-group">
                <label >Họ và tên :</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập họ tên" value="{{ $data->name}}">
                <p class="alert text-danger"> {{$errors->first('name')}}</p>
              </div>
              <div class="form-group">
                <label>Email :</label>
                <input type="text" class="form-control" name="email" placeholder="Nhập email" value="{{$data->email}}" required readonly>
                <p class="alert text-danger"> {{$errors->first('email')}}</p>
              </div>
              <div class="form-group">
                <label>Số điện thoại :</label>
                <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{$data->phone}}">
                <p class="alert text-danger"> {{$errors->first('phone')}}</p>
              </div>
              <div class="form-group">
                <label>Mật khẩu :</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" value="{{old('password')}}">
                <p class="alert text-danger"> {{$errors->first('password')}}</p>
              </div>
              <div class="form-group">
                <label> Xác nhận lại mật khẩu :</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại mật khẩu" value="{{old('password_confirmation')}}">
                <p class="alert text-danger"> {{$errors->first('password_confirmation')}}</p>
              </div>
              <div class="form-group">
                <label> Chọn quyền truy cập :</label>
                <select name="level" class="form-control">
                    <option value="10">-- Supper Admins --</option>
                    <option value="1">-- Nhân viên quản lý --</option>
                    <option value="2">-- Người dùng  --</option>
                </select>
              </div>
              <!-- radio -->
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" name="roles" type="radio" value="1">
                  <label class="form-check-label">Chọn nếu là Admin or Supper Admin</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="roles" type="radio" value="0">
                  <label class="form-check-label">Chọn nếu là Người dùng</label>
                  <p class="alert text-danger"> {{$errors->first('roles')}}</p>
                </div>
              </div>
             </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="col-md-2">
                  <button type="submit" class="btn btn-block btn-outline-primary btn-lg">Lưu lại</button>
              </div>
            </div>
          </form>
        </div>
      </div>
     </div>
    </div>
  </section>
        <!-- /.card -->
@endsection
