@extends('backend.index')
@section('controller','Users')
@section('action','Danh sách')
@section('content')
@include('backend.block.flash_mag')

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card card-primary">
   <div class="card-header">
      <h3 class="card-title">Table</h3>
         <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
               <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                 <div class="input-group-append">
                   <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                 </div>
              </div>
           </div>
        </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <thead>
           <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Email</th>
             <th>Phone</th>
             <th>Địa chỉ</th>
             <th>Trạng thái</th>
             <th>Ngày đăng ký</th>
             <th>Hành động</th>
           </tr>
           <thead>
           <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td>
              @if($user->status == 0)
                <span style="color:#27ae60;">Đã xác nhận</span>
              @else
                <span style="color:#d35400;">Quản lí</span>
              @endif
            </td>
            <td>{{$user->created_at}}</td>
            <td>
              @if($user->status == 0)
              <a onclick="return confirm('Bạn có chắc chắn muốn xóa!')" href="{!! url('backend/user/delete',$user->id) !!}"><i class="fa fa-times-circle" style="font-size:30px;color:red"></i></a>
              @endif
            </td>
          </tr>
      @endforeach
        </tbody>
        </table>
      </div>
      <!-- /.card-body -->
  </div>
    <!-- /.card -->
</div>
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
@endsection
