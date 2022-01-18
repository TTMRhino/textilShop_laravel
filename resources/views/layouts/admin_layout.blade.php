<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Админ-панель - @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('homeAdmin') }}">Home</a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link"  href="ССЫЛКО!!!">
        <i class="fas fa-shopping-cart"></i>
          <span class="badge badge-danger navbar-badge">{{ $layoutOrders_count }}</span>
        </a>
       
      </li>
      <!-- Notifications Dropdown Menu -->      
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('homeAdmin') }}" class="brand-link">
      <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <span class="" style="color:#a9a9a9;" ИМЯ ПОЛЬЗОВАТЕЛЯ!!!</span>
          <a href=" логаут!!!"> : LogOut</a>
          
          
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        

          <li class="nav-item">
            <a href="#" class="nav-link">
              
              <i class="far fa-chart-bar"></i>
              <p>
                Статистика
                <!--<span class="right badge badge-danger">New</span>-->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              
            <i class="fas fa-shopping-cart"></i>
              <p>
                Заказы                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              
            <i class="fa fa-users"></i>
              <p>
                Организации              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('MainGroup.index') }}" class="nav-link">
              
            <i class="fas fa-object-group"></i>
              <p>
                Группы               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('SubGroup.index') }}" class="nav-link">
              
            <i class="far fa-object-group"></i>
              <p>
                Подгруппы               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('Items.index') }}" class="nav-link">
              
            <i class="fas fa-tools"></i>
              <p>
                Товар               
              </p>
            </a>
          </li>

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        </div>

        <!-- Блок загрузки ---start----->
          <li class="nav-item">
            <a href="{{ route('uploadItems') }}" class="nav-link">
              
            <i class="fas fa-file-upload"></i>
              <p>
                Загрузка номенклатура и групп              
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('uploadPrice') }}" class="nav-link">
              
              <i class="fas fa-file-upload"></i>
                <p>
                  Загрузка цен              
                </p>
              </a>
          </li>
          
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          </div>

          <!-- Блок загрузки ---end--- -->

          <li class="nav-item">
            <a href="#" class="nav-link">              
            <i class="fa fa-cog" aria-hidden="true"></i>
              <p>
                Пароль             
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
  <div class="content-wrapper">
   @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/admin/plugins/raphael/raphael.min.js"></script>
<script src="/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard2.js"></script>
<!-- My script for admin Panel -->
<script src="/admin/admin.js"></script>

</body>
</html>
