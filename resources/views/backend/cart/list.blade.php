@extends('backend.index')
@section('controller','Đơn hàng')
@section('action','Danh sách')
@section('content')
@include('backend.block.flash_mag')
<!-- Main content -->
<section class="content-header">
<div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Bảng hóa đơn</h3>
        <div class="card-tools">
          <form class="" action="{{route('backend.cart.search')}}" method="GET">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tr>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Chi tiết hóa đơn </th>
            <th> Xóa</th>
          </tr>
    @foreach($orders as $order)
          <tr>
            <td>{{$order->name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->address}}</td>
            <td>{{number_format($order->total_price,0,',','.')}} đ</td>
            <td>
              @if($order->status == 0)
                <span class="badge badge-danger">Đơn hàng chưa xác nhận</span>
              @elseif($order->status==1)
                <span class="badge badge-info">Đơn hàng đã xác nhận</span>
              @elseif($order->status ==2)
                <span class="badge badge-warning">Đơn hàng đang được giao</span>
              @elseif($order->status ==3)
                <span class="badge badge-success">Đã giao hàng xong</span>
              @endif
            </td>
            <td align="center" ><a href="{{route('backend.cart.show',$order->id)}}"><i class="fa fa-share-alt-square" aria-hidden="true" style="font-size:30px;color:blue"></i></a></td>
            <td align="center"><a onclick="return confirm('Bạn có chắc chắn muốn xóa!')" href="{{route('backend.cart.destroy',$order->id)}}"><i class="fa fa-times-circle" style="font-size:30px;color:red"></i></a> </td>
          </tr>
   @endforeach
        </table>
        <div class="pull-right">
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li>{!! $orders->render()!!}</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
   </div>
  </section>
<!-- /.content -->
@endsection
