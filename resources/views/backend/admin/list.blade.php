@extends('backend.layout.master')
@section('controller','Admin')
@section('action','Danh sách')
@section('content')


<section class="content">
<div class="container-fluid">
<div class="row">
  <div class="col-12">
    @include('backend.block.flash_mag')
    <div class="col-md-3">
      <div class="panel-heading" >
       <a href="{!! route('admin.create') !!}"><button type="submit" class="btn btn-block btn-outline-success btn-lg">Thêm danh mục</button></a>
     </div>
   </div>
  <br>
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
             <th>Quyền</th>
             <th>Hành động</th>
           </tr>
           <thead>
           <tbody>
        @foreach ($admin as $admins)
          <tr>
            <td>{{$admins->id}}</td>
            <td>{{$admins->name}}</td>
            <td>{{$admins->email}}</td>
            <td>{{$admins->phone}}</td>
            <td>
              @if($admins->level == 10)
                <span style="color:#d35400;">Supper Admin</span>
              @elseif($admins->level == 1)
                <span style="color:#27ae60;">Admin</span>
              @else
                <span style="color:#27ae60;">User</span>
              @endif
            </td>
            <td>
              @if ($admins->level == 10)
                 <a href="{!! url('admin/edit',$admins->id) !!}"><i class="material-icons" style="font-size:25px;color:blue">border_color</i></a>
              @else
                  <a href="{!! url('admin/edit',$admins->id) !!}"><i class="material-icons" style="font-size:25px;color:blue">border_color</i></a>
                  <a onclick="return confirm('Bạn có chắc chắn muốn xóa!')" href="{!! url('admin/delete',$admins->id) !!}"><i class="fa fa-times-circle" style="font-size:30px;color:red"></i></a>
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
