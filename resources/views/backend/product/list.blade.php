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
<form class="" action="{{route('backend.product.search')}}" method="GET">
 <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
   <div class="card-header">
      <h3 class="card-title">Table</h3>
         <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 250px;">
               <input type="text" name="search" class="form-control float-right" placeholder="Search">
               <div class="input-group-append">
                 <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
               </div>
              </div>
            </div>
          </div>
        </form>
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
          <tbody class="danhsach">
      @foreach ($products as $product)
         <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->category->name}}</td>
              <td>{{$product->name}}</td>
              <td>{{number_format($product->price,0,',','.')}} đ</td>
              <td>{{$product->made}}</td>
              <td>
                  <img src="{!! asset('images/'.$product->image) !!}" width="40" alt="{!! $product->name !!}">
              </td>
              <td align="center">
                    <a href="{!! url('backend/product/edit',$product->id) !!}"><i class="material-icons" style="font-size:25px;color:blue">border_color</i></a>
                    <a href="{!! url('backend/product/delete',$product->id) !!}" onclick="return confirm('Bạn có chắc chắn muốn xóa!')"><i class="fa fa-times-circle" style="font-size:30px;color:red"></i></a>
              </td>
        </tr>
      @endforeach
          </tbody>
    </table>
  <div class="pull-right">
      <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
              <li> {!! $products->render()!!}</li>
           </ul>
          </div>
         </div>
        </div>
      </div>
     </div>
    </div>
   </div>
  </section>
@endsection
