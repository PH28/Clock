@extends('backend.index')
@section('controller','Sản phẩm')
@section('action','Sửa')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
         <!-- @include('backend.block.errors')    thông báo lỗi trên phía trên -->
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Table</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
        <form role="form" class="form-horizontal" method="POST" action="{!!route('backend.product.update',$product->id)!!}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="card-body">
              <div class="form-group">
                <label>Thể loại <span class="text-danger">*</span> </label>
                <select class="form-control" name="cate_id">
                 {{ MenuMulti($cate,0,$str=' ',$product['parent_id']) }}
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"> Tên sản phẩm<span class="text-danger">*</span> </label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
                <p class="alert text-danger"> {{$errors->first('name')}} </p>
              </div>
              <div class="form-group">
                <label>Giá <span class="text-danger">*</span> </label>
                <input type="text" class="form-control" name="price"  value="{{ old('price') ? old('price') : $product->price}}">
                <p class="alert text-danger"> {{$errors->first('price')}}</p>
              </div>
              <div class="form-group">
                <label>Giá sale <span class="text-danger">*</span> </label>
                <input type="text" class="form-control" name="sale" value="{{$product->sale}}">
                <p class="alert text-danger"> {{$errors->first('sale')}} </p>
              </div>

              <div class="form-group">
                <label>Thương hiệu <span class="text-danger">*</span> </label>
                <input type="text" class="form-control" name="made"  value="{{$product->made}}">
                <p class="alert text-danger"> {{$errors->first('made')}} </p>
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Đánh giá</label>
                <textarea class="form-control focus-form" name="description" id="ckeditor1">{{$product->description}}</textarea>
                <p class="alert text-danger"> {{$errors->first('description')}} </p>
              </div>

              <div class="form-group">
                <label>Đánh giá chi tiết</label>
                <textarea class="form-control focus-form" name="content" id="ckeditor2">{{$product->content}}</textarea>
                <p class="alert text-danger"> {{$errors->first('content')}} </p>
              </div>

              <div class="form-group">
                <label class="col-md-2">Hình ảnh <span class="text-danger">*</span> </label>
                  <div class="col-md-10">
                    <input type="file" name="fileimages"><br/> <br>
                      <img src="{!! asset('images/'.$product['image']) !!}" width="120">
                      <input type="hidden" value="{!! $product['image'] !!}" name="img_current" />
                      </div>
                     </div>
              <!-- input states -->
              <div class="form-group has-success">
                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Trạng thái sản phẩm <span class="text-danger">*</span> </label>
                <select class="form-control" name="status">
                  <option value="1" @if($product->status==1) selected @endif>== Còn hàng ==</option>
                  <option value="0" @if($product->status==0) selected @endif>== Tạm hết ==</option>
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
