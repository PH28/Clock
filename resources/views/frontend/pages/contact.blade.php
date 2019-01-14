@extends('frontend.master')
@section('content')
<!-- contact -->
 <div class="contact">
		<div class="container">
      <div class="ele-bottom-grid">
        <h3 class="tittle">Liên Hệ Với Chúng Tôi</h3>
        <h5><p>Để liên hệ với chúng tôi, bạn có thể gửi email tới <a>khanhhokhanhho@gmail.com</a> hoặc sử dụng form liên hệ phía dưới </p></h5>
      </div>
          @include('frontend.block.flash_mag')
          @include('frontend.block.errors')
	<form method="POST" action="{{route('postcontact')}}">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
      <div class="contact-form2">
        <input type="text"  name="name" value="{{old('name')}}" placeholder="Tên" >
        <input type="email" name="email" value="{{old('email')}}" placeholder="Email"  required="">
        <textarea type="text" name="content" value="{{old('content')}}" placeholder="Nội dung" required=""></textarea>
        <input type="submit" value="Submit" >
       </div>
			</form>
		</div>
	</div>
<!-- //contact -->
@endsection
