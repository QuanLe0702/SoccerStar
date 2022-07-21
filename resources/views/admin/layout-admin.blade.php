<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial- scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->


        @if(Auth::check())

        @if( Auth::user()->role == 3 )
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">Trang chủ</a>
                </li>
            </ul>
           
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <a class="btn btn-outline-dark" href="{{ route('admin.logout')}}">
                    <i class="ion-log-out"></i> Đăng xuất
                </a>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ Route('customer.home') }}" class="brand-link">
                <img src="{{ asset('backend/img/logo-admin.png') }}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SoccerStar</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a class="d-block">

                            Quản lý -
                            {{Auth::user()->name}}

                        </a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-house-user"></i>
                                <p>Trang chủ</p>
                            </a>
                        </li>
                        <li class="nav-item disabled">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-address-book"></i>
                                <p>
                                    Khách hàng
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.customer')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách khách hàng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Sản phẩm
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/product/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/product/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm sản phẩm</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sitemap"></i>
                                <p>
                                    Loại sản phẩm
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/product_type/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách loại sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/product_type/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm loại sản phẩm</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-empire"></i>
                                <p>
                                    Thương hiệu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/brand/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách thương hiệu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/brand/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm thương hiệu</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon 	fas fa-snowflake"></i>
                                <p>
                                    Khuyến mãi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/promotion/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách khuyến mãi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/promotion/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm khuyến mãi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-hornbill"></i>
                                <p>
                                    Slider
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/slider/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách Slider</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/slider/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm Slider</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Bình luận
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.comment')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách bình luận</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bell"></i>
                                <p>
                                    Phản hồi Website
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.feedback')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách phản hồi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-readme"></i>
                                <p>
                                    Tin tức
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/news/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách tin tức</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/news/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm tin tức</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-stack-exchange"></i>
                                <p>
                                    Đơn hàng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/orders/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách đơn hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/orderdetails/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chi tiết đơn hàng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-nutritionix"></i>
                                <p>
                                    Doanh thu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách doanh thu</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    Admin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/users/index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/users/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm admin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                @elseif( Auth::user()->role == 1)

                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('admin.dashboard1') }}" class="nav-link">Trang chủ</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                        <a class="btn btn-outline-dark" href="{{ route('admin.logout')}}">
                            <i class="ion-log-out"></i> Đăng xuất
                        </a>

                    </ul>
                </nav>
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="{{ Route('customer.home') }}" class="brand-link">
                        <img src="{{ asset('backend/img/logo-admin.png') }}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">SoccerStar</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="info">
                                <a class="d-block">

                                    Quản lý sản phẩm -
                                    {{Auth::user()->name}}

                                </a>
                            </div>
                        </div>
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item">
                                    <a href="{{ route('admin.dashboard1') }}" class="nav-link">
                                        <i class="nav-icon fas fa-house-user"></i>
                                        <p>Trang chủ</p>
                                    </a>
                                </li>
                                <li class="nav-item disabled">
                                    <a href="#" class="nav-link disabled">
                                        <i class="nav-icon far fa-address-book"></i>
                                        <p>
                                            Khách hàng
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.customer')}}" class="nav-link disabled">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách khách hàng</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Sản phẩm
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/product/index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách sản phẩm</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/product/create') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thêm sản phẩm</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-sitemap"></i>
                                        <p>
                                            Loại sản phẩm
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/product_type/index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách loại sản phẩm</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/product_type/create') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thêm loại sản phẩm</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fab fa-empire"></i>
                                        <p>
                                            Thương hiệu
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/brand/index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách thương hiệu</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/brand/create') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thêm thương hiệu</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon 	fas fa-snowflake"></i>
                                        <p>
                                            Khuyến mãi
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/promotion/index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách khuyến mãi</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/promotion/create') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thêm khuyến mãi</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fab fa-hornbill"></i>
                                        <p>
                                            Slider
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/slider/index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách Slider</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/slider/create') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thêm Slider</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>
                                            Bình luận
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.comment')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách bình luận</p>
                                            </a>
                                        </li>
                                    </ul>
                                <li class="nav-item">
                                    <a href="#" class="nav-link disabled">
                                        <i class="nav-icon fas fa-bell"></i>
                                        <p>
                                            Phản hồi Website
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.feedback')}}" class="nav-link disabled">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách phản hồi</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>



                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fab fa-readme"></i>
                                        <p>
                                            Tin tức
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/news/index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách tin tức</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/news/create') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thêm tin tức</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link disabled">
                                        <i class="nav-icon fab fa-stack-exchange"></i>
                                        <p>
                                            Đơn hàng
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/orders/index') }}" class="nav-link disabled">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách đơn hàng</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/orderdetails/index') }}" class="nav-link disabled">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Chi tiết đơn hàng</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link disabled">
                                        <i class="nav-icon fab fa-nutritionix"></i>
                                        <p>
                                            Doanh thu
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link disabled">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách doanh thu</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link disabled">
                                        <i class="nav-icon fas fa-user-tie"></i>
                                        <p>
                                            Admin
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('admin/users/index') }}" class="nav-link disabled">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách admin</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('admin/users/create') }}" class="nav-link disabled">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thêm admin</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>


                        @elseif( Auth::user()->role == 2)

                        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                            <!-- Left navbar links -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                    <a href="{{ route('admin.dashboard2') }}" class="nav-link">Trang chủ</a>
                                </li>
                            </ul>
                            <!-- SEARCH FORM -->
                            <form class="form-inline ml-3">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                                <a class="btn btn-outline-dark" href="{{ route('admin.logout')}}">
                                    <i class="ion-log-out"></i> Đăng xuất
                                </a>

                            </ul>
                        </nav>
                        <!-- /.navbar -->

                        <!-- Main Sidebar Container -->
                        <aside class="main-sidebar sidebar-dark-primary elevation-4">
                            <!-- Brand Logo -->
                            <a href="{{ Route('customer.home') }}" class="brand-link">
                                <img src="{{ asset('backend/img/logo-admin.png') }}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                                <span class="brand-text font-weight-light">SoccerStar</span>
                            </a>

                            <!-- Sidebar -->
                            <div class="sidebar">
                                <!-- Sidebar user (optional) -->
                                <nav class="mt-2">
                                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                        <div class="info">
                                            <a class="d-block">

                                                Quản lý khách hàng-
                                                {{Auth::user()->name}}

                                            </a>
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.dashboard2') }}" class="nav-link">
                                                <i class="nav-icon fas fa-house-user"></i>
                                                <p>Trang chủ</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-address-book"></i>
                                                <p>
                                                    Khách hàng
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ route('admin.customer')}}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách khách hàng</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link disabled">
                                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                                <p>
                                                    Sản phẩm
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/product/index') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách sản phẩm</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/product/create') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Thêm sản phẩm</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link disabled">
                                                <i class="nav-icon fas fa-sitemap"></i>
                                                <p>
                                                    Loại sản phẩm
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/product_type/index') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách loại sản phẩm</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/product_type/create') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Thêm loại sản phẩm</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link disabled">
                                                <i class="nav-icon fab fa-empire"></i>
                                                <p>
                                                    Thương hiệu
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/brand/index') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách thương hiệu</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/brand/create') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Thêm thương hiệu</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link disabled">
                                                <i class="nav-icon 	fas fa-snowflake"></i>
                                                <p>
                                                    Khuyến mãi
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/promotion/index') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách khuyến mãi</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/promotion/create') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Thêm khuyến mãi</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link disabled">
                                                <i class="nav-icon fab fa-hornbill"></i>
                                                <p>
                                                    Slider
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/slider/index') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách Slider</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/slider/create') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Thêm Slider</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link disabled">
                                                <i class="nav-icon fas fa-edit"></i>
                                                <p>
                                                    Bình luận
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ route('admin.comment')}}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách bình luận</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-bell"></i>
                                                <p>
                                                    Phản hồi Website
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ route('admin.feedback')}}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách phản hồi</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>



                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link disabled">
                                                <i class="nav-icon fab fa-readme"></i>
                                                <p>
                                                    Tin tức
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/news/index') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách tin tức</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/news/create') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Thêm tin tức</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fab fa-stack-exchange"></i>
                                                <p>
                                                    Đơn hàng
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/orders/index') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách đơn hàng</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/orderdetails/index') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Chi tiết đơn hàng</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fab fa-nutritionix"></i>
                                                <p>
                                                    Doanh thu
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách doanh thu</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link disabled">
                                                <i class="nav-icon fas fa-user-tie"></i>
                                                <p>
                                                    Admin
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/users/index') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Danh sách admin</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/users/create') }}" class="nav-link disabled">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Thêm admin</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                @endif
                                @endif

                            </div>
                            <!-- /.sidebar -->
                        </aside>
                        <!-- Content Wrapper. Contains page content -->
                        <div class="content-wrapper">
                            @yield('content')
                            <!-- /.content -->
                        </div>

                        <footer class="main-footer">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> BẢN QUYỀN THUỘC SOCCERSTAR
                        </footer>


                    </div>

                    <!-- ./wrapper -->
                    <!-- jQuery -->
                    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
                    <!-- Bootstrap 4 -->
                    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                    <!-- DataTables -->
                    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
                    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
                    <!-- AdminLTE App -->
                    <script src="{{ asset('backend/js/adminlte.min.js') }}"></script>

                    <!-- page script -->
                    <script src="{{ asset('backend/ckeditor/ckeditor.js')}}"></script>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace('ckeditor');
                        CKEDITOR.replace('ckeditor1');
                        CKEDITOR.replace('ckeditor2');
                        CKEDITOR.replace('ckeditor3');
                        CKEDITOR.replace('id4');
                    </script>
                    <script type="text/javascript">
                        function ChangeToSlug() {
                            var slug;

                            //Lấy text từ thẻ input title 
                            slug = document.getElementById("slug").value;
                            slug = slug.toLowerCase();
                            //Đổi ký tự có dấu thành không dấu
                            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                            slug = slug.replace(/đ/gi, 'd');
                            //Xóa các ký tự đặt biệt
                            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                            //Đổi khoảng trắng thành ký tự gạch ngang
                            slug = slug.replace(/ /gi, "-");
                            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                            slug = slug.replace(/\-\-\-\-\-/gi, '-');
                            slug = slug.replace(/\-\-\-\-/gi, '-');
                            slug = slug.replace(/\-\-\-/gi, '-');
                            slug = slug.replace(/\-\-/gi, '-');
                            //Xóa các ký tự gạch ngang ở đầu và cuối
                            slug = '@' + slug + '@';
                            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                            //In slug ra textbox có id “slug”
                            document.getElementById('convert_slug').value = slug;
                        }
                    </script>

                    @yield('script-section')
</body>

</html>