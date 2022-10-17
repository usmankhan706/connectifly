@extends("layouts.dashboard")

@section("title", "Dashboard")

@section("page-name", "Dashboard")

@section("content")
    <section id="count-wrapper">
        <div class="count-container">

            <a href="{{ route('admin.services') }}">
                <div class="count-card">
                    <div class="icon">
                        <i class="fas fa-laptop-house"></i>
                    </div>
                    <div class="desc">
                        <p class="counter">{{ $services }}</p>
                        <p class="title">Services</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.all-users') }}">
                <div class="count-card">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="desc">
                        <p class="counter">{{ $users }}</p>
                        <p class="title">Users</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.all-companies') }}">
                <div class="count-card">
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="desc">
                        <p class="counter">{{ $companies }}</p>
                        <p class="title">companies</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.all-jobs'  ) }}">
                <div class="count-card">
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="desc">
                        <p class="counter">{{ $jobs }}</p>
                        <p class="title">jobs posted</p>
                    </div>
                </div>
            </a>

        </div>
    </section>
@endsection
