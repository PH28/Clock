@extends('backend.layout.master')
@section('controller','Danh mục')
@section('action','Thêm')
@section('content')


<section class="content">
   <div class="container-fluid">
      <div class="row">
		     <div class="col-lg-12">
			     	@include('backend.block.errors')
<form role="form"  class="form-horizontal" method="POST" action="{{ route('category.getAdd') }}">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
	  	<div class="col-md-3">
		  	 <div class="panel-heading">
				  	<button type="submit" class="btn btn-block btn-outline-success btn-lg">Thêm mới danh mục</button>
						<!-- <button type="submit" class="btn btn-outline btn-primary btn-lg">Thêm danh mục</button> -->
		 	 </div>
	  	</div>
	<br>
<div class="card card-warning">
   <div class="card-header">
			 <h3 class="card-title">Table</h3>
	 </div>
	         <div class="card-body">
							<div class="form-group">
								 <label>Tên danh mục</label>
								    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục ..." value="{!! old('name') !!}">
					  	</div>
							        	<div class="form-group">
									         <label>Danh mục cha</label>
								            	<select class="form-control" name="parent_id">
									             	<option value="0">- ROOT --</option>
									                	<?php MenuMulti($data,0,$str='---| ',old('parent_id')); ?>
								              </select>
								        </div>
					           </form>
				          </div>
			         </div>
				    </div>
			   </section>

@endsection
