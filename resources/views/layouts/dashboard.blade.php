<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Connect It - @yield("title")</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/web/connect-it-logo2.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7ae40850c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>

    <section id="admin-dashboard" class="sidebar-open sidebar-open-md">

        <div id="header">
            <div class="sidebar-toogler">
                <span><i class="fas fa-bars"></i></span>
            </div>
            <div class="profile-icon">
                <div class="logout-box">
                    <form class="logout-box-inner" action="{{ route("admin.logout") }}" method="POST">
                        @csrf
                        <button type="submit">logout</button>
                    </form>
                </div>
                <a href="javascript:void(0)">
                    <img src="{{ asset("images/web/profile-placeholder.png") }}" alt="">
                    <p>{{ auth("admin")->user()->name }}</p>
                </a>
            </div>
        </div>

        <div id="sidebar">
            <div class="logo-box">
                <a href="{{ route("admin.dashboard") }}"><img src="{{ asset("images/web/connect-it-logo.png") }}" alt=""></a>
                <p>C</p>
                <button id="close-btn"><i class="fas fa-times"></i></button>
            </div>
            <div class="sidebar-title">
                <a href="{{ route("admin.dashboard") }}" title="Dashboard"><i class="fas fa-tachometer-alt"></i><p>Dashboard</p></a>
            </div>
            <div class="sidebar-nav">
                <ul>
                    <li><a href="{{ route("admin.services") }}" title="Services" class="{{ request()->routeIs("admin.services") ||request()->routeIs("admin.service-manage") ? "active" : "" }}"><i class="fas fa-laptop-house"></i><p>Services</p></a></li>
                    <li><a href="{{ route("admin.all-companies") }}" title="Companies" class="{{ request()->routeIs("admin.all-companies")|| request()->routeIs("admin.view-company") ? "active" : "" }}"><i class="fas fa-building"></i><p>Companies</p></a></li>
                    <li><a href="{{ route("admin.all-users") }}" title="Users" class="{{ request()->routeIs("admin.all-users") ? "active" : "" }}"><i class="fas fa-users"></i><p>Users</p></a></li>
                    <li><a href="{{ route("admin.all-jobs") }}" title="Jobs Posted" class="{{ request()->routeIs("admin.all-jobs") ? "active" : "" }}"><i class="fas fa-briefcase"></i><p>Jobs Posted</p></a></li>
                </ul>
            </div>
        </div>

        <div id="content">
            <div class="breadcrumb">
                <p>@yield('page-name')</p>
                <p><a href="{{ route("admin.dashboard") }}">Home</a> / @yield('current-page')</p>
            </div>
            @yield('content')
        </div>

        <div id="footer">
            <p>Copyright © 2021-2022 Connectit.com. All rights reserved.</p>
            <p>Version 3.1.0</p>
        </div>

    </section>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset("js/admin/sidebar.js") }}"></script>
    <script>
        $(document).ready( function () {
            $('.datatable').DataTable();
        } );
    </script>
</body>
</html>
