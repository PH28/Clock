@extends('backend.layout.master')
@section('controller','Sản phẩm')
@section('action','Sửa')
@section('content')
@include('backend.block.flash_mag')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Table</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="{{ route('product.getAdd') }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="card-body">
              <div class="form-group">
                <label>Thể loại</label>
                <select class="form-control" name="cat_id">
                  <option value="0">-- ROOT --</option>
                 <?php MenuMulti($data,0,$str='---| ',old('parent_id')); ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{ old('name')}}">
              </div>
              <div class="form-group">
                <label>Giá</label>
                <input type="text" class="form-control" name="price" placeholder="Nhập giá" value="{{old('price')}}">
              </div>
              <div class="form-group">
                <label>Giá sale</label>
                <input type="text" class="form-control" name="sale" placeholder="Nhập giá khuyến mãi" value="{{old('sale')}}">
              </div>

              <div class="form-group">
                <label>Thương hiệu</label>
                <input type="text" class="form-control" name="made" placeholder="Nhập thương hiệu" value="{{old('made')}}">
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Đánh giá</label>
                <textarea id="editor1" name="description" style="width: 100%" rows="3" placeholder="Đánh giá cho sản phẩm" value="{{('description')}}"></textarea>
              </div>
              <div class="form-group">
                <label>Đánh giá chi tiết</label>
                <textarea id="editor2" name="content" style="width: 100%" rows="3" placeholder="Đánh giá chi tiết cho sản phẩm" value="{{('content')}}"></textarea>
              </div>
              <div class="form-group">
                <label class="col-md-2">Hình ảnh</label>
                  <div class="col-md-10">
                    <input type="file" name="image">
                      </div>
                     </div>
                    </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="col-md-3">
                  <button type="submit" class="btn btn-block btn-outline-primary btn-lg">Thêm sản phẩm</button>
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
