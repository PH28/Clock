@extends('backend.index')
@section('controller','Chi tiết hóa đơn')
@section('action','Show')
@section('content')

<!-- Main content -->
<section class="content-header">
<div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Bảng chi tiết hóa đơn</h3>
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
          <tr>
            <th>Tên khách hàng</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Ngày đặt hàng</th>
            <th>Trạng thái</th>
            <th>Hành động </th>
          </tr>
    @foreach($order_detail as $value)
          <tr>
            <td>{{$value->order->name}}</td>
            <td>{{$value->product->name}}</td>
            <td>
              <img src="{!! asset('images/'.$value->product->image) !!}" width="40" alt="{!! $value->product->name !!}">
            </td>
            <td>{{$value->quantity}}</td>
            <td>{{number_format($value->price,0,',','.')}} đ</td>
            <td>{{$value->created_at}} </td>
            <td>
              @if($value->product->status ==1)
                <span class="badge badge-success">Còn hàng</span>
              @else
                <span class="badge badge-danger">Tạm hết</span>
              @endif
            </td>
            <td><a href="{{route('backend.cart.index')}}"><i class="fa fa-reply" aria-hidden="true" style="font-size:30px;color:blue"></i></a></td>
          </tr>
   @endforeach
        </table>
      </div>
      <!-- /.card-body -->
    </div>
<form class="" action="{{route('backend.cart.update',$value->id)}}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="control-group ">
        <label  for="input-id" class="control-label"> Chọn trạng thái đơn hàng : </label>
              <div class="controls">
                      <select name="status" class="form-control" style="width: 30%">
                          <option value="0" >Chưa xác nhận</option>
                          <option value="1" >Đã xác nhận</option>
                          <option value="2" >Đang giao hàng</option>
                          <option value="3" >Đã giao hàng xong</option>
                      </select>
                  </div>
                  <br>
                  <button type="submit" onclick="return xacnhan('Bạn có chắc chắn thực hiện hành động này ?')"  class="btn btn-danger">Lưu lại</button>
              </div>
          </div>
    <!-- /.card -->
  </div>
</div><!-- /.row -->
</form>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
