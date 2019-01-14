@extends('backend.index')
@section('controller','Trang chủ')
@section('action','')
@section('content')


<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Sản phẩm</span>
            <span class="info-box-number">
              {{$product}}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-comments-o" aria-hidden="true"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Bình luận</span>
            <span class="info-box-number">{{$comments}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fa fa-shopping-cart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Đơn hàng</span>
            <span class="info-box-number">{{$orders}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Người dùng</span>
            <span class="info-box-number">{{$users}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->



    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-8">
        <!-- TABLE: LATEST ORDERS -->
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Đơn hàng mới nhất</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-widget="remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                <tr>
                  <th>Tên khách hàng</th>
                  <th>Trạng thái</th>
                  <th>Ngày đặt hàng</th>
                </tr>
                </thead>
                <tbody>
      @foreach($datas as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>
                    @if($data->status == 0)
                      <span class="badge badge-danger">Đơn hàng chưa xác nhận</span>
                    @elseif($data->status==1)
                      <span class="badge badge-info">Đơn hàng đã xác nhận</span>
                    @elseif($data->status ==2)
                      <span class="badge badge-warning">Đơn hàng đang được giao</span>
                    @elseif($data->status ==3)
                      <span class="badge badge-success">Đã giao hàng xong</span>
                    @endif
                  </td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">{{$data->created_at}}</div>
                  </td>
                </tr>
      @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <a href="{{route('backend.cart.index')}}" class="btn btn-sm btn-secondary float-right">Xem tất cả các đơn hàng</a>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-4">
        <div class="card">
        <!-- PRODUCT LIST -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Sản phẩm mới nhất</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-widget="remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
      @foreach ($products as $product)
               <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{!! url('images/'.$product->image) !!}" alt="{{$product->name}}" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">{{$product->name}}
                    <span class="badge badge-success float-right">{{ number_format($product->price,0,',','.')}} vnđ </span></a>
                </div>
              </li>
              <!-- /.item -->
      @endforeach
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="{{route('backend.product.index')}}" class="uppercase"><span class="badge badge-warning">Xem tất cả sản phẩm</span></a>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    <!-- </div> -->
    <!-- /.row -->
  </div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
