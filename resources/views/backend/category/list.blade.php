@extends('backend.index')
@section('controller','Danh mục')
@section('action','Danh sách')
@section('content')
@include('backend.block.flash_mag')

<section class="content">
   <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
             <div class="col-md-3">
                <div class="panel-heading" >
                   <a href="{!! url('backend/category/add') !!}"><button type="submit" class="btn btn-block btn-outline-success btn-lg">Thêm danh mục</button></a>
                </div>
             </div>
  <br>

<div class="card card-primary">
  <div class="card-header">
     <h3 class="card-title">Table</h3>
        <div class="card-tools">
           <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
             </div>
          </div>
       </div>
   <div class="card-body p-0">
      <table class="table table-striped">
         <thead>
          <tr>
             <th>ID</th>
             <th>Thể loại</th>
             <th>Danh mục cha</th>
             <th>Thao tác</th>
          </tr>
        </thead>
     <tbody>
       @foreach($datas as $data)
         <tr class="success">
             <td>{!! $data->id !!}</td>
             <td>{!! $data->name !!}</td>
             <td><a href="">
               @if($data->parent_id == 0)
               {!! "==" !!}
               @else
               {{$category->name}}
               @endif
              </a></td>
             <td>
               <a href="{!! url('backend/category/edit',$data->id) !!}"><i class="material-icons" style="font-size:25px;color:blue">border_color</i></a>
               <a onclick="return confirm('Bạn có chắc chắn muốn xóa!')" href="{!! url('backend/category/destroy',$data->id) !!}"><i class="fa fa-times-circle" style="font-size:30px;color:red"></i></a>
             </td>
           </tr>
        @endforeach
     </tbody>
    </table>
  </div>
 </div>
</div>
</div>
</div>
</section>

@endsection
