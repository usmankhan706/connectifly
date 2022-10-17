@extends("layouts.app")

@section('title', 'Compnay Profile')

@section('content')

    <section id="company_profile_upper">
        <div class="container">
            <div class="rounded">
                <div class="cover-container">
                    <img src="@if ($company->cover == '')

                    {{ asset('images/web/cover-placeholder.png') }}
                @else
                    {{ asset('company_cover_images/' . $company->cover) }}
                    @endif" alt="cover photo">
                </div>

                <div class="profile-info">
                    <div class="profile-pic-container">
                        <img src="                  @if ($company->logo == '')

                        {{ asset('images/web/profile-placeholder.png') }}
                    @else
                        {{ asset('company_logos/' . $company->logo) }}
                        @endif" alt="profile picture">
                    </div>

                    <div class="info">
                        <div class="left">
                            <span class="users-name">{{ $company->name }}</span>

                            <p class="users-title">{{ $company->service->service }}
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                @if ($company->city == '')
                                    City
                                @else
                                    {{ $company->city }}
                                @endif,
                                @if ($company->country == '')
                                    Country
                                @else
                                    {{ $company->country }}
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp; {{count($company->follower) }} {{ Str::plural('follower', count($company->follower)) }}
                            </p>

                            <p class="users-residence">
                                <a href="javascript:void(0)" class="contact-link">{{ $company->size }}
                                    {{ $plural = Str::plural('employee', $company->size) }}</a>
                            </p>
                        </div>

                        <div class="right">
                            <p>
                                <a href="        @if ($company->website == '')
                                    javascript:void(0)
                                @else
                                    {{ $company->website }}
                                    @endif" class="website-btn" target="_blank">Website</a>
                            </p>

                            @if (auth("user")->check())
                                @if (!$company->followedBy(auth("user")->user()))
                                    <form action="{{ route("follow") }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $company->id }}">
                                        <button type="submit" class="follow-btn">Follow</button>
                                    </form>

                                @else

                                <form action="{{ route("unfollow") }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $company->id }}">
                                    <button type="submit" class="follow-btn">Unfollow</button>
                                </form>
                                @endif
                            @endif
                        </div>
                    </div>

                    {{-- <div class="recomended-jobs">
                        <p>Recomended Jobs</p>

                        <div class="flex jobs">

                            <div class="job-listing flex">
                                <div class="icon-wrap">

                                    <div class="icon-box">
                                        <span><i class="fas fa-desktop"></i></span>
                                    </div>
                                </div>

                                <div class="job-name">
                                    <p>Laravel developer</p>
                                    <p class="company">A company</p>
                                    <a href="javascript:void">Easy Apply</a>
                                </div>
                            </div>

                            <div class="job-listing flex">
                                <div class="icon-wrap">

                                    <div class="icon-box">
                                        <span><i class="fas fa-desktop"></i></span>
                                    </div>
                                </div>

                                <div class="job-name">
                                    <p>Laravel developer</p>
                                    <p class="company">A company</p>
                                    <a href="javascript:void">Easy Apply</a>
                                </div>
                            </div>

                            <div class="job-listing flex">
                                <div class="icon-wrap">

                                    <div class="icon-box">
                                        <span><i class="fas fa-desktop"></i></span>
                                    </div>
                                </div>

                                <div class="job-name">
                                    <p>Laravel developer</p>
                                    <p class="company">A company</p>
                                    <a href="javascript:void">Easy Apply</a>
                                </div>
                            </div>

                            <div class="job-listing flex">
                                <div class="icon-wrap">

                                    <div class="icon-box">
                                        <span><i class="fas fa-desktop"></i></span>
                                    </div>
                                </div>

                                <div class="job-name">
                                    <p>Laravel developer</p>
                                    <p class="company">A company</p>
                                    <a href="javascript:void">Easy Apply</a>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="company-profile-nav">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="javascript:void(0)" class="toogle-section active" data-show="all">Home</a></li>
                    {{-- <li><a href="javascript:void(0)" class="toogle-section" data-show="company_profile_middle">About</a>
                    </li> --}}
                    {{-- <li><a href="javascript:void(0)" class="toogle-section" data-show="company_post_container">Posts</a>
                    </li> --}}
                    <li><a href="javascript:void(0)" class="toogle-section" data-show="company_job_container">Jobs</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <section id="company_profile_middle">
        <div class="container">
            <div class="rounded">
                <p class="section-heading">About
                </p>

                <p class="about-desc">
                    {{ $company->description }}
                </p>
            </div>
        </div>
    </section>

    {{-- <section id="company_post_container">
        <div class="container">
            <div class="rounded">
                <div class="flex post-nav">
                    <p class="section-heading">Page Posts
                    </p>

                    <div class="owl-post-nav-container">

                    </div>
                </div>




                <div class="owl-carousel owl-theme" id="post-slider">

                    <div class="item">
                        <div class="item-wrapper">
                            <div class="company-holder">
                                <div class="flex">
                                    <div class="logo">
                                        <img src="{{ asset('images/web/lg2.png') }}" alt="">
                                    </div>

                                    <div class="company-info">
                                        <p class="name">Lorem Solutions</p>

                                        <p class="post-data">2 days ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="post-images">
                                <img src="{{ asset('images/web/post-1.png') }}" alt="">
                            </div>

                            <div class="post-action-container">
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-thumbs-up.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Like</p>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-comment-alt.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Comment</p>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-share.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Share</p>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="item-wrapper">
                            <div class="company-holder">
                                <div class="flex">
                                    <div class="logo">
                                        <img src="{{ asset('images/web/lg2.png') }}" alt="">
                                    </div>

                                    <div class="company-info">
                                        <p class="name">Lorem Solutions</p>

                                        <p class="post-data">2 days ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="post-images">
                                <img src="{{ asset('images/web/post-1.png') }}" alt="">
                            </div>

                            <div class="post-action-container">
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-thumbs-up.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Like</p>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-comment-alt.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Comment</p>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-share.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Share</p>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="item-wrapper">
                            <div class="company-holder">
                                <div class="flex">
                                    <div class="logo">
                                        <img src="{{ asset('images/web/lg2.png') }}" alt="">
                                    </div>

                                    <div class="company-info">
                                        <p class="name">Lorem Solutions</p>

                                        <p class="post-data">2 days ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="post-images">
                                <img src="{{ asset('images/web/post-1.png') }}" alt="">
                            </div>

                            <div class="post-action-container">
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-thumbs-up.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Like</p>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-comment-alt.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Comment</p>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-share.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Share</p>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="item-wrapper">
                            <div class="company-holder">
                                <div class="flex">
                                    <div class="logo">
                                        <img src="{{ asset('images/web/lg2.png') }}" alt="">
                                    </div>

                                    <div class="company-info">
                                        <p class="name">Lorem Solutions</p>

                                        <p class="post-data">2 days ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-text">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="post-images">
                                <img src="{{ asset('images/web/post-1.png') }}" alt="">
                            </div>

                            <div class="post-action-container">
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-thumbs-up.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Like</p>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-comment-alt.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Comment</p>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1">
                                    <form action="">
                                        <input type="hidden">
                                        <button type="submit" class="btn-like"><img
                                                src="{{ asset('images/web/fi-br-share.png') }}" alt="">&nbsp;&nbsp;
                                            <p>Share</p>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}


    <section id="company_job_container">
        <div class="container">
            <div class="rounded">
                <div class="flex jobs-nav">
                    <p class="section-heading">Recent Jobs Opening
                    </p>

                    <div class="owl-jobs-nav-container">

                    </div>
                </div>

                <div class="owl-carousel owl-theme" id="jobs-slider">

                    @if ($company->jobs->count())
                        @foreach ($company->jobs->sortByDesc("created_at") as $job)

                            <div class="item">
                                <div class="item-wrapper">
                                    <p class="job-title">{{ $job->title }}</p>
                                    <p class="job-description">{{ $job->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                            <p>No Jobs Posted Yet</p>
                    @endif

                </div>

            </div>
        </div>
    </section>


@endsection
