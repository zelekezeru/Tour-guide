<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Grace Tour - Dashboard</title>
    <!-- Animate.css -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    
    {{-- For the Footer --}}
    <link href="{{ asset('admin/css/ruang-admin.min.css') }}" rel="stylesheet">

    <link  href="{{ asset('css/icomoon.css') }}" rel="stylesheet"> 
    
    {{-- Blog Text api and cdn --}}
    @yield('blogTextarea')
    
</head>

<body id="page-top">
    <div id="wrapper">
        @include('admins.admin-layouts.admin-sidenav')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('admins.admin-layouts.admin-nav')

                 <!-- Page Content -->
                @yield('content')
                
            </div>
            
        </div>
    </div>
        <!-- Footer -->
                
        @include('layouts.footer')
        <!-- Footer -->

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    
        <!-- Stellar Parallax -->
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('admin/js/ruang-admin.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
</body>

</html>