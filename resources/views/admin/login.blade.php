<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! url('backend/dist/css/adminlte.min.css') !!}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{!! url('backend/plugins/iCheck/square/blue.css') !!}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b></b>WATCHES</a>
  </div>
      @include('backend.block.flash_mag')
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng nhập tài khoản</p>

    <form action="{!!route('admin.postLogin')!!}" method="post" >
      <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="email">
          <p class="alert text-danger"><span class="fa fa-envelope form-control-feedback">{{$errors->first('email')}}</span></p>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="password">
          <p class="alert text-danger"><span class="fa fa-lock form-control-feedback">{{$errors->first('password')}}</span></p>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{!! url('backend/plugins/jquery/jquery.min.js') !!}"></script>
<!-- Bootstrap 4 -->
<script src="{!! url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<!-- iCheck -->
<script src="{!! url('backend/plugins/iCheck/icheck.min.js') !!}"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$(".form-control-feedback").delay(5000).slideUp();
});
</script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
