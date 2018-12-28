@extends('backend.index')
@section('controller','Admin')
@section('action','Thêm')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
          	<!-- @include('backend.block.errors') -->
            @include('backend.block.flash_mag')
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Table</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="{!!route('backend.admin.create')!!}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="card-body">
              <div class="form-group">
                <label >Họ và tên :<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" placeholder="Nhập họ tên" value="{{ old('name')}}">
                <p class="alert text-danger"> {{$errors->first('name')}}</p>
              </div>
              <div class="form-group">
                <label>Email :<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="email" placeholder="Nhập email" value="{{old('email')}}">
                <p class="alert text-danger"> {{$errors->first('email')}}</p>
              </div>
              <div class="form-group">
                <label>Số điện thoại :<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{old('phone')}}">
                <p class="alert text-danger"> {{$errors->first('phone')}}</p>
              </div>
              <div class="form-group">
                <label>Mật khẩu :<span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" value="{{old('password')}}">
                <p class="alert text-danger"> {{$errors->first('password')}}</p>
              </div>
              <div class="form-group">
                <label> Xác nhận lại mật khẩu :<span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Nhập mật khẩu" value="{{old('password_confirmation')}}">
                <p class="alert text-danger"> {{$errors->first('password_confirmation')}}</p>
              </div>
              <div class="form-group">
                <label> Chọn quyền truy cập :<span class="text-danger">*</span></label>
                <select name="level" class="form-control">
                    <option value="10">-- Supper Admin --</option>
                    <option value="1" >-- Admin --</option>
                </select>
                <input type="hidden" name="roles" value="1">
              </div>
             </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="col-md-2">
                  <button type="submit" class="btn btn-block btn-outline-primary btn-lg"> Lưu lại</button>
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
