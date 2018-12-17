<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="dropdown">
        <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
          @if(Auth::check())
           <span>{{Auth::user()->name}}</span>
          @endif
       <i class="fa fa-user fa-lg"></i> </a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="/"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
          <li><a class="dropdown-item" href="/"><i class="fa fa-user fa-lg"></i> Profile</a></li>
          <li><a class="dropdown-item" href="{!!route('admin.logout')!!}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
      <!-- Notifications Dropdown Menu -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{!! url('backend/dist/img/AdminLTELogo.png') !!}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
              Trang chủ

              </p>
            </a>
          <li class="nav-item">
            <a href="{!!url('category/list')!!}" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Danh mục
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{!! url('product/list') !!}" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Sản Phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Đơn Hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{!! url('user/list') !!}" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Khách Hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{!! url('admin/list') !!}" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Admin
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->