@extends('backend.index')
@section('controller','Danh mục')
@section('action','Sửa')
@section('content')
<section class="content">
   <div class="container-fluid">
      <div class="row">
	      	<div class="col-lg-12">
		      	 @include('backend.block.errors')
			        @include('backend.block.flash_mag')
              <form role="form"  class="form-horizontal" method="POST" action="{!!route('backend.category.update',$data->id)!!}">
	 		          <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			            <div class="col-md-3">
				           	<div class="panel-heading">
						         	<button type="submit" class="btn btn-block btn-outline-success btn-lg">Sửa danh mục</button>
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
						<label>Tên danh mục <span class="text-danger">*</span></label>
							<input type="text" name="name" class="form-control" value="{{$data->name}}">
					</div>
						    <div class="form-group">
									<label>Danh mục cha</label>
									  <select class="form-control" name="parent_id">
									  	<option value="0">-- ROOT --</option>
                         {{ MenuMulti($cate,0,$str='---| ',$data['parent_id']) }}
								  	</select>
							   </div>
					     </form>
					  </div>
					</div>
			 </div>
		</section>
@endsection
