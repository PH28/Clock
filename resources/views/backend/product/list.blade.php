@extends('backend.layout.master')
@section('controller','Sản phẩm')
@section('action','Danh sách')
@section('content')
@include('backend.block.flash_mag')

<section class="content">
  <div class="container-fluid">
    <div class="row">
       <div class="col-12">
          <div class="col-md-3">
             <div class="panel-heading" >
               <a href="{!! url('product/add') !!}"><button type="submit" class="btn btn-block btn-outline-success btn-lg">Thêm danh mục</button></a>
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
      @foreach ($data as $datas)
            <tr>
              <td>{{$datas->id}}</td>
              <td>{{$category->name}}</td>
              <td>{{$datas->name}}</td>
              <td>{{$datas->price}}</td>
              <td>{{$datas->made}}</td>
              <td>
                  <img src="{!! asset('images/'.$datas->image) !!}" width="40" alt="{!! $datas->name !!}">
              </td>
               <td align="center">
                    <a href="{!! url('product/edit',$datas->id) !!}"><i class="material-icons" style="font-size:25px;color:blue">border_color</i></a>
                    <a href="{!! url('product/delete',$datas->id) !!}" onclick="return confirm('Bạn có chắc chắn muốn xóa!')"><i class="fa fa-times-circle" style="font-size:30px;color:red"></i></a>
              </td>
            </tr>
      @endforeach
          </tbody>
    </table>
  <div class="pull-right">
      <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
              <li> {!! $data->render()!!}</li>
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
