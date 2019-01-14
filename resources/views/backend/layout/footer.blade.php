
<!-- jQuery -->
<script src="{!! url('backend/plugins/jquery/jquery.min.js') !!}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>

<!-- script chạy thông báo lỗi -->
<script type="text/javascript">
$(document).ready(function()
{
	$(".alert").delay(5000).slideUp();
});
</script>
<!-- end thông báo lỗi -->

<!-- js ckediter -->
<script src="{!! url('backend/jQuery-2.1.4.min.js') !!}"></script>
<script src="{!! url('backend/myscript.js') !!}"></script>
<!-- ckediter và ckfinder -->
 <script type="text/javascript" src="{!! url('backend/ckeditor/ckeditor.js') !!}"></script>
 <script type="text/javascript" src="{!! url('backend/ckfinder/ckfinder.js') !!}"></script>
 <script type="text/javascript">
		 var baseURL ="{!! url('/') !!}";
 </script>
 <script type="text/javascript" src="{!! url('backend/func_ckfinder.js') !!}"></script>
 <!-- end ckediter và ckfinder -->
 <script type="text/javascript">
	 CKEDITOR.replace('ckeditor2',{
		 height: '150px',
		 toolbar:[
		 ['Source','-','NewPage','Preview','-','Templates'],
		 ['Styles','Format','Font','FontSize'],
		 ['TextColor','BGColor'],
		 ]
	 });
 </script>
 <script type="text/javascript">
	 ckeditor('ckeditor1');
 </script>
<!-- Bootstrap 4 -->
<script src="{!! url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="{!! url('backend/plugins/morris/morris.min.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! url('backend/plugins/sparkline/jquery.sparkline.min.js') !!}"></script>
<!-- jvectormap -->
<script src="{!! url('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! url('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!! url('backend/plugins/knob/jquery.knob.js') !!}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{!! url('backend/plugins/daterangepicker/daterangepicker.js') !!}"></script>
<!-- datepicker -->
<script src="{!! url('backend/plugins/datepicker/bootstrap-datepicker.js') !!}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!! url('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
<!-- Slimscroll -->
<script src="{!! url('backend/plugins/slimScroll/jquery.slimscroll.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! url('backend/plugins/fastclick/fastclick.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! url('backend/dist/js/adminlte.js') !!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!! url('backend/dist/js/pages/dashboard.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!! url('backend/dist/js/demo.js') !!}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!! url('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
</body>
</html>
