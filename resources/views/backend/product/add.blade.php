@extends('backend.layout.master')
@section('controller','Sản phẩm')
@section('action','Sửa')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
         	<!-- @include('backend.block.errors') -->
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Table</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="{{ route('product.create') }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="card-body">
              <div class="form-group">
                <label>Thể loại</label>
                <select class="form-control" name="cate_id">
                 <?php MenuMulti($data,0,$str='',old('parent_id')); ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{ old('name')}}">
                <p class="alert text-danger"> {{$errors->first('name')}} </p>
              </div>
              <div class="form-group">
                <label>Giá</label>
                <input type="text" class="form-control" name="price" placeholder="Nhập giá" value="{{old('price')}}">
                <p class="alert text-danger"> {{$errors->first('price')}} </p>
              </div>
              <div class="form-group">
                <label>Giá sale</label>
                <input type="text" class="form-control" name="sale" placeholder="Nhập giá khuyến mãi" value="{{old('sale')}}">
                <p class="alert text-danger"> {{$errors->first('sale')}} </p>
              </div>

              <div class="form-group">
                <label>Thương hiệu</label>
                <input type="text" class="form-control" name="made" placeholder="Nhập thương hiệu" value="{{old('made')}}">
                <p class="alert text-danger"> {{$errors->first('made')}} </p>
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Đánh giá</label>
                <textarea id="editor1" name="content" style="width: 100%" rows="3"  value="">{{old('description')}}</textarea>
                <p class="alert text-danger"> {{$errors->first('content')}} </p>
              </div>
              <div class="form-group">
                <label>Đánh giá chi tiết</label>
                <textarea id="editor2" name="description" style="width: 100%" rows="3"  value="">{{old('content')}}</textarea>
                <p class="alert text-danger"> {{$errors->first('description')}} </p>
              </div>
              <div class="form-group">
                <label class="col-md-2">Hình ảnh</label>
                  <div class="col-md-10">
                    <input type="file" name="image">
                    <p class="alert text-danger"> {{$errors->first('image')}} </p>
                      </div>
                     </div>
               <input type="hidden" name="status" value="1">
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
