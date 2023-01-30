<!DOCTYPE html>
<html lang="en">
@include('dashboard.layout.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    @include('dashboard.layout.nav_bar')
    @include('dashboard.layout.menu')
    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    @include('dashboard.layout.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include("dashboard.layout.js")
</body>
</html>
