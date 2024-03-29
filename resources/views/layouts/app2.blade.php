<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/fontawesome-free/css/all.min.css") }}'>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}'>
  <!-- iCheck -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}'>
  <!-- JQVMap -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/jqvmap/jqvmap.min.css") }}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/dist/css/adminlte.min.css") }}'>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}'>
  <!-- Daterange picker -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/daterangepicker/daterangepicker.css") }}'>
  <!-- summernote -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/summernote/summernote-bs4.min.css") }}'>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src='{{ asset("AdminLTE/dist/img/AdminLTELogo.png") }}' alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src='{{ asset("AdminLTE/dist/img/user1-128x128.jpg") }}' alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src='{{ asset("AdminLTE/dist/img/user8-128x128.jpg") }}' alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src='{{ asset("AdminLTE/dist/img/user3-128x128.jpg") }}' alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src='{{ asset("AdminLTE/dist/img/avatar5.png") }}' alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hardy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src='{{ asset("AdminLTE/dist/img/AdminLTELogo.png") }}' class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">03081200035</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
           @include("layouts.sidebar") 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Soal dan penjelasan solusi website</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
 
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Sistem  Perpustakaan 
                </h3>
                
              </div><!-- /.card-header -->
              
            <!-- /.card -->
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
     
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src='{{ asset("AdminLTE/plugins/jquery/jquery.min.js") }}'></script>
<!-- jQuery UI 1.11.4 -->
<script src='{{ asset("AdminLTE/plugins/jquery-ui/jquery-ui.min.js") }}'></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src='{{ asset("AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js") }}'></script>
<!-- ChartJS -->
<script src='{{ asset("AdminLTE/plugins/chart.js/Chart.min.js") }}'></script>
<!-- Sparkline -->
<script src='{{ asset("AdminLTE/plugins/sparklines/sparkline.js") }}'></script>
<!-- JQVMap -->
<script src='{{ asset("AdminLTE/plugins/jqvmap/jquery.vmap.min.js") }}'></script>
<script src='{{ asset("AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js") }}'></script>
<!-- jQuery Knob Chart -->
<script src='{{ asset("AdminLTE/plugins/jquery-knob/jquery.knob.min.js") }}'></script>
<!-- daterangepicker -->
<script src='{{ asset("AdminLTE/plugins/moment/moment.min.js") }}'></script>
<script src='{{ asset("AdminLTE/plugins/daterangepicker/daterangepicker.js") }}'></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src='{{ asset("AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}'></script>
<!-- Summernote -->
<script src='{{ asset("AdminLTE/plugins/summernote/summernote-bs4.min.js") }}'></script>
<!-- overlayScrollbars -->
<script src='{{ asset("AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}'></script>
<!-- AdminLTE App -->
<script src='{{ asset("AdminLTE/dist/js/adminlte.js") }}'></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src='{{ asset("AdminLTE/dist/js/pages/dashboard.js") }}'></script>
</body>
</html>