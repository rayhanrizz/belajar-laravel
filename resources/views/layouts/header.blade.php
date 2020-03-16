<!DOCTYPE html>
<html>
<head>
  <title>Jordan House</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

   <!-- CSS Libraries -->
   <link rel="stylesheet" href="{{asset('node_modules/jqvmap/dist/jqvmap.min.css')}}">
   <link rel="stylesheet" href="{{asset('node_modules/summernote/dist/summernote-bs4.css')}}">
   <link rel="stylesheet" href="{{asset('node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
</head>
<body>
  <div class="navbar-bg"></div>
  <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->nama}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
      </nav>
  <div class="main-content">
        <section class="section">
          <div class="row">

            @yield('content')

          </div>
        </section>
      </div>
  <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Jordan House</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-item active" href="{{url('Dashboard')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Data</li>
              <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-gift"></i><span>Barang</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('Product')}}">Data Barang</a></li>
                  <li><a class="nav-link" href="{{url('Product/create')}}">Tambah Barang</a></li>
                </ul>
              </li>
            </ul>
            <ul class="sidebar-menu">
              <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('Category')}}">Data Kategori</a></li>
                  <li><a class="nav-link" href="{{url('Category/create')}}">Tambah Kategori</a></li>
                </ul>
              </li>
            </ul>
        </aside>
      </div>

<footer class="main-footer">
  <div class="footer-left">
    <p><center>Jordan House ~ copyright &#169; 2020 All rights reserved</center></p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index.js"></script>
</body>
</html>