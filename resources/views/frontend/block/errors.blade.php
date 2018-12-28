
@if(count($errors) > 0)
<div class="alert alert-danger">
  <h5><i class="icon fa fa-info"></i>Alert!</h5>
  <ul>
      @foreach ($errors->all() as $error)
          <li>{!! $error !!}</li>
      @endforeach
  </ul>
</div>
@endif
