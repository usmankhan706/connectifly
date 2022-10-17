@extends("layouts.app")

@section('title', 'My Profile')

@section('content')

    <section id="company_profile_upper">
        <div class="container">
            <div class="rounded">
                <div class="cover-container">
                    <img src="@if (auth('company')->user()->cover == ''){{ asset('images/web/cover-placeholder.png') }}@else{{ asset('company_cover_images/' . auth('company')->user()->cover) }}
                    @endif" alt="cover photo">
                    <button class="cover-upload-btn" id="modal-toggle" data-toggle="cover-picture">
                        <i class="fas fa-upload"></i>
                    </button>
                </div>

                <div class="profile-info">
                    <div class="profile-pic-container">
                        <img src="@if (auth('company')->user()->logo ==
                        ''){{ asset('images/web/profile-placeholder.png') }}@else{{ asset('company_logos/' . auth('company')->user()->logo) }}@endif" alt="profile picture">
                        <button class="profile-upload-btn" id="modal-toggle" data-toggle="profile-picture"><i
                                class="fas fa-upload"></i></button>
                    </div>
                    <div class="info">
                        <div class="left">
                            <span class="users-name">{{ auth('company')->user()->name }}</span>
                            <button class="edit-btn" id="modal-toggle" data-toggle="names-modal"><i
                                    class="fas fa-pencil-alt"></i></button>

                            <p class="users-title">
                                @if (auth('company')->user()->service_id != null)
                                {{ auth('company')->user()->service_id }}
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                @if (auth('company')->user()->city == '')
                                    City
                                @else
                                    <span class="capitalize">{{ auth('company')->user()->city }}</span>
                                @endif,
                                @if (auth('company')->user()->country == '')
                                    Country
                                @else
                                <span class="capitalize">{{ auth('company')->user()->country }}</span>
                                @endif
                                &nbsp;&nbsp;&nbsp;&nbsp; {{count(auth('company')->user()->follower) }} {{ Str::plural('follower', count(auth('company')->user()->follower)) }}
                            </p>

                            <p class="users-residence">
                                <a href="javascript:void(0)" class="contact-link">{{ count(auth('company')->user()->users) }}
                                    {{ $plural = Str::plural('employee', count(auth('company')->user()->users)) }}</a>
                            </p>
                        </div>

                        <div class="right">
                            @if (auth('company')->user()->subscribed && auth('company')->user()->subscribed->cycle_ends_at < now())
                            <p>
                                <a href="{{ route('company.cancel_sbscription') }}" class="website-btn" target="_blank">Cancel Subscription</a>
                            </p>
                            @endif
                            <p>
                                <a href="@if (auth('company')->user()->website == '')javascript:void(0)@else {{ auth('company')->user()->website }}@endif" class="website-btn" target="_blank">Website</a>
                            </p>

                            @if (auth()->user()->subscribed)

                            <p>
                                <a href="{{ route("company.personal") }}" class="website-btn" target="_blank">Add Account</a>
                            </p>
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
                    @if (!auth()->user()->subscribed)
                        <div class="">
                            <a href="{{ route('home') }}" style="text-align: center;cursor: pointer; display: block; text-decoration: none; font-weight: bold;">Please choose your package to get the complete bussiness profile</a>
                        </div>
                    @endif
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
                    <button class="edit-btn" id="modal-toggle" data-toggle="about-modal"><i
                            class="fas fa-pencil-alt"></i></button>
                </p>

                <p class="about-desc">
                    {{ auth('company')->user()->description }}
                </p>
            </div>
        </div>
    </section>

    <section id="company_profile_middle">
        <div class="container">
            <div class="rounded">
                <p class="section-heading">Employees</p>

                @forelse (auth('company')->user()->users as $user)
                <p class="about-desc">
                    {{ $user->first_name." ".$user->last_name }}
                </p>

                @empty

                <p class="about-desc">
                    no employee yet
                </p>
                @endforelse
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

    @if(auth()->user()->subscribed)
    <div id="job-form" class="forms company_job_container">
        <div class="container">
            <div class="rounded">

                <p class="section-heading">Add Jobs
                    {{-- <a class="edit-btn" href="javascript:void(0)"><i class="fas fa-pencil-alt"></i></a> --}}
                </p>
                <form action="{{ route('company.jobs.save') }}" method="POST">
                    @csrf
                    <div class="flex">
                        {{-- <div class="form-control form-half">
                            <input type="text" name="title" placeholder="Staff Needed*">
                        </div> --}}
                    </div>
                    <div class="form-control">
                        <input type="text" name="title" placeholder="Job Title*" value="{{ old('title') }}">
                        @error('title')
                            <p class="validation-message">{{ $message }}</p>
                        @enderror 
                    </div>

                    <div class="form-control">
                        <textarea name="description" id="" cols="30" rows="10"
                            placeholder="Job description...">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="validation-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-control">
                        <button type="submit">Add Job</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @endif

    <section id="company_job_container">
        <div class="container">
            <div class="rounded">
                <div class="flex jobs-nav">
                    <p class="section-heading">Recent Jobs Opening
                        {{-- <a class="edit-btn" href="javascript:void(0)"><i class="fas fa-pencil-alt"></i></a> --}}
                    </p>

                    <div class="owl-jobs-nav-container">

                    </div>
                </div>

                <div class="owl-carousel owl-theme" id="jobs-slider">




                    @if (auth('company')->user()->jobs->count())
                        @foreach (auth('company')->user()->jobs->sortByDesc("created_at") as $job)

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

    {{-- modals starts here --}}
    <div class="modal-container" id="profile-picture">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">Logo</p>
            </div>
            <form action="{{ route('company.profile.picture') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <div class="file-btn">
                        <input type="file" id="filebtn" name="logo" accept="image/*">
                        <label for="filebtn">Choose File</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-container" id="cover-picture">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">Cover Image</p>
            </div>
            <form action="{{ route('company.profile.cover') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <div class="file-btn">
                        <input type="file" id="filebtn1" name="cover" accept="image/*">
                        <label for="filebtn1">Choose File</label>
                        @error('cover')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-container" id="about-modal">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">About You</p>
            </div>

            <form action="{{ route('company.profile.about') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method("put")


                    <div class="form-control">
                        <select type="text" name="service" class="text-feild">
                            <option value="" disabled>Select Services</option>
                            @foreach ($services as $service )

                            <option value="{{ $service->id }}" @if (auth('company')->user()->service_id==$service->id) selected @endif>{{ $service->service }}</option>
                            @endforeach
                        </select>
                        @error('service')
                            <p class="validation-message">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control" id="company-search">
                        <input type="url" class="text-feild" placeholder="Website*" id="company-ajax" name="website"
                            value="{{ auth()->guard('company')->user()->website }}" autocomplete="off">
                            @error("website")

                            <p class="validation-message">{{ $message }}</p>
                            @enderror
                    </div>


                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Country*" name="country"
                            value="{{ auth()->guard('company')->user()->country }}" autocomplete="no">
                            @error("country")

                            <p class="validation-message">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="City*" name="city"
                            value="{{ auth()->guard('company')->user()->city }}" autocomplete="no">
                            @error("city")

                            <p class="validation-message">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="form-control">
                        <input type="phone" class="text-feild" placeholder="Country*" name="phone"
                            value="{{ auth()->guard('company')->user()->phone }}" autocomplete="no">
                            @error("phone")

                            <p class="validation-message">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Country*" name="size"
                            value="{{ auth()->guard('company')->user()->size }}" autocomplete="no">
                            @error("size")

                            <p class="validation-message">{{ $message }}</p>
                            @enderror
                    </div>
                    <textarea name="about" id="" cols="30" rows="10"
                        class="about-area">{{ auth('company')->user()->description }}</textarea>
                        @error("about")

                            <p class="validation-message">{{ $message }}</p>
                        @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>


    <div class="modal-container" id="names-modal">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">Company Name</p>
            </div>
            <form action="{{ route('company.profile.names') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Company Name*" name="name"
                            value="{{ auth('company')->user()->name }}" autocomplete="no">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="modal-container" id="work-modal">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">Add Your Work Experience</p>
            </div>
            <form action="{{ route('company.profile.experience') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Job Title*" name="title"
                            value="{{ old('title') }}" autocomplete="no">
                    </div>
                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Company*" name="company"
                            value="{{ old('company') }}" autocomplete="no">
                    </div>
                    <div class="form-control">
                        <label for="">Joined*</label>
                        <input type="date" class="text-feild" placeholder="First Name*" name="joined"
                            value="{{ old('joined') }}" autocomplete="no" max="@php
                                echo date('Y-m-d');
                            @endphp" value="">

                        @error('joined')
                            <p class="validation-message">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="">Left</label>
                        <input type="date" class="text-feild" placeholder="First Name*" name="left"
                            value="{{ old('left') }}" autocomplete="no" max="@php
                                echo date('Y-m-d');
                            @endphp" value="">

                        @error('left')
                            <p class="validation-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div> --}}


    {{-- <div class="modal-container" id="skills-modal">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">Add Your Skills</p>
            </div>
            <form action="{{ route('profile.skills') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Skill Title*" name="skill"
                            value="{{ old('title') }}" autocomplete="no" required>
                    </div>

                    <p class="ratings-head">Skill Strength</p>
                    <div class="ratings">

                        <input type="radio" class="star-radio" name="stars" id="star1" value="5"required>
                        <label for="star1" class="stars"><i class="fas fa-star"></i></label>

                        <input type="radio" class="star-radio" name="stars" id="star2" value="4"required>
                        <label for="star2" class="stars"><i class="fas fa-star"></i></label>

                        <input type="radio" class="star-radio" name="stars" id="star3" value="3"required>
                        <label for="star3" class="stars"><i class="fas fa-star"></i></label>

                        <input type="radio" class="star-radio" name="stars" id="star4" value="2"required>
                        <label for="star4" class="stars"><i class="fas fa-star"></i></label>

                        <input type="radio" class="star-radio" name="stars" id="star5" value="1"required>
                        <label for="star5" class="stars"><i class="fas fa-star"></i></label>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div> --}}

@endsection
