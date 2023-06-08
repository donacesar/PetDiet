<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    <link rel="preload" as="style" href="/build/assets/app-52b35bbb.css"/>
    <link rel="stylesheet" href="/build/assets/app-52b35bbb.css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    @yield('head+')
</head>
<body class="hold-transition sidebar-mini" style="font-family: 'Trebuchet MS', Helvetica, sans-serif;">
<div class="wrapper wrapper-custom">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a  href="{{ route('small_order.index') }}" class="nav-link">
                    <i class="fas fas fa-phone-alt"></i>
                    @if(session('small_orders') != 0)
                        <span class="badge badge-danger navbar-badge menu-badge">{{ session('small_orders') }}</span>
                    @endif
                </a>
            </li>

            <li class="nav-item dropdown">
                <a  href="{{ route('full_order.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    @if(session('full_orders') != 0)
                        <span class="badge badge-danger navbar-badge menu-badge">{{ session('full_orders') }}</span>
                    @endif
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}" role="button">
                    <i class="fas fa-bone"></i>
                </a>
            </li>
            <li class="nav-item">
                <form class="" action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn">
                        <i class="fas fa-sign-out-alt"></i></button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-my-custom">
        <!-- Brand Logo -->
        <a href="{{ route('admin.index') }}" class="brand-link">
            <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Админка</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ route('small_order.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-phone-alt"></i>
                            <p>
                                Простая заявка
                                @if(session('small_orders') != 0)
                                    <span class="badge badge-info right">{{ session('small_orders') }}</span>
                                @endif
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('full_order.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Полная заявка
                                <span class="badge badge-info right">{{ session('full_orders') }}</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Архив заявок
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('finished_small_order.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Простые заявки</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('finished_full_order.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Полные заявки</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-telegram-plane"></i>
                            <p>Настройка бота</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('change.password') }}" class="nav-link">
                            <i class="nav-icon fas fa-key"></i>
                            <p>Сменить пароль</p>
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
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mobile-h" style="font-size: 1.2em">
                            @yield('header')
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="admin-footer">
        <!-- Copyright -->
        <div class="">
            © 2022-{{date('Y')}} Copyright:
            <a class="text-reset fw-bold" href="{{ route('index') }}">{{ config('app.name') }}</a>
        </div>
        <!-- Copyright -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{'/plugins/bootstrap/js/bootstrap.bundle.min.js'}} "></script>
<!-- AdminLTE -->
<script src="{{ asset('/dist/js/adminlte.js') }}"></script>

</body>
</html>
