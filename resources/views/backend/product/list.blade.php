@extends('backend.index')
@section('controller','Sản phẩm')
@section('action','Danh sách')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
       <div class="col-12">
         @include('backend.block.flash_mag')
          <div class="col-md-3">
             <div class="panel-heading" >
               <a href="{!! url('backend/product/add') !!}"><button type="submit" class="btn btn-block btn-outline-success btn-lg">Thêm sản phẩm</button></a>
             </div>
            </div>
        <br>
<div class="card card-primary">
   <div class="card-header">
      <h3 class="card-title">Table</h3>
         <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 250px;">
               <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                     <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
               </div>
             </div>
        <br>
            <!-- /.card-header -->
  <div class="card-body">
     <table id="example1" class="table table-bordered table-striped ">
          <thead>
            <tr>
              <th>ID</th>
              <th>Thể Loại</th>
              <th>Name</th>
              <th>Giá</th>
              <th>Thương hiệu</th>
              <th>Hình ảnh</th>
              <th style="width:10%">Hành động</th>
            </tr>
          </thead>
          <tbody>
      @foreach ($datas as $data)
            <tr>
              <td>{{$data->id}}</td>
              <td>{{$category->name}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->price}}</td>
              <td>{{$data->made}}</td>
              <td>
                  <img src="{!! asset('images/'.$data->image) !!}" width="40" alt="{!! $data->name !!}">
              </td>
               <td align="center">
                    <a href="{!! url('backend/product/edit',$data->id) !!}"><i class="material-icons" style="font-size:25px;color:blue">border_color</i></a>
                    <a href="{!! url('backend/product/delete',$data->id) !!}" onclick="return confirm('Bạn có chắc chắn muốn xóa!')"><i class="fa fa-times-circle" style="font-size:30px;color:red"></i></a>
              </td>
            </tr>
      @endforeach
          </tbody>
    </table>
  <div class="pull-right">
      <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
              <li> {!! $datas->render()!!}</li>
           </ul>
          </div>
         </div>
        </div>
        <!-- /.card-body -->
      </div>
     </div>
    </div>
   </div>
  </section>

@endsection
