@include('backend.layout.header')
@include('backend.layout.app')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      @yield('controller')
      <small>@yield('action')</small>
    </h1>
  </section>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">


         <!-- Main content -->
           @yield('content')
         <!-- /.content -->


      </div> 
    </div>

@include('backend.layout.footer')
