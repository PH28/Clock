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
        <form role="form" class="form-horizontal" method="POST" action="{!!route('product.postEdit',$product->id)!!}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="card-body">
              <div class="form-group">
                <label>Thể loại</label>
                <select class="form-control" name="cat_id">
                  <option value="0">-- ROOT --</option>
                 <?php MenuMulti($cat,0,$str='--|-- ',$product['parent_id']); ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{$product->name}}">
              </div>
              <div class="form-group">
                <label>Giá</label>
                <input type="text" class="form-control" name="price"  value="{{$product->price}}">
              </div>
              <div class="form-group">
                <label>Giá sale</label>
                <input type="text" class="form-control" name="sale" value="{{$product->sale}}">
              </div>

              <div class="form-group">
                <label>Thương hiệu</label>
                <input type="text" class="form-control" name="made"  value="{{$product->made}}">
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Đánh giá</label>
                <textarea id="editor1" name="description" style="width: 100%">{{$product->description}}</textarea>
              </div>

              <div class="form-group">
                <label>Đánh giá chi tiết</label>
                <textarea id="editor2" name="content" style="width: 100%">{{$product->content}}</textarea>
              </div>

              <div class="form-group">
                <label class="col-md-2">Hình ảnh</label>
                  <div class="col-md-10">
                    <input type="file" name="fileimages"><br/> <br>
                      <img src="{!! asset('images/'.$product['image']) !!}" width="120">
                        <input type="hidden" value="{!! $product['image']!!}" name="img_current" />
                      </div>
                     </div>
              <!-- input states -->
              <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Trạng thái sản phẩm</label>
                <select class="form-control" name="status">
                  <option value="1" @if($product->status==1) selected @endif>-- Còn hàng --</option>
                  <option value="0" @if($product->status==0) selected @endif>-- Tạm hết --</option>
                </select>
              </div>

              <!-- select -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="col-md-2">
                  <button type="submit" class="btn btn-block btn-outline-primary btn-lg">Lưu lại</button>
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
