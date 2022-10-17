@extends("layouts.app")
 
@section('title', 'My Profile')

@section('content')

    <section id="user_profile_upper">
        <div class="container">
            <div class="rounded">
                <div class="cover-container">
                    <img src="    @if (auth()->guard('user')->user()->cover == '')

                    {{ asset('images/web/cover-placeholder.png') }}
                @else
                    {{ asset(
    'cover_images/' .
        auth()->guard('user')->user()->cover,
) }}
                    @endif" alt="cover photo">
                    <button class="cover-upload-btn" id="modal-toggle" data-toggle="cover-picture"><i
                            class="fas fa-upload"></i></button>
                </div>

                <div class="profile-info">
                    <div class="profile-pic-container">
                        <img src="          @if (auth()->guard('user')->user()->profile ==
                        '')

                        {{ asset('images/web/profile-placeholder.png') }}
                    @else
                        {{ asset(
    'profile_images/' .
        auth()->guard('user')->user()->profile,
) }}
                        @endif" alt="profile picture">
                        <button class="profile-upload-btn" id="modal-toggle" data-toggle="profile-picture"><i
                                class="fas fa-upload"></i></button>
                    </div>

                    <div class="info">
                        <span
                            class="users-name">{{ auth()->guard('user')->user()->first_name .
    ' ' .
    auth()->guard('user')->user()->last_name }}</span>
                        <button class="edit-btn" id="modal-toggle" data-toggle="names-modal"><i
                                class="fas fa-pencil-alt"></i></button>
                        <p class="users-title">
                            @if (!empty(auth('user')->user()->title))
                                {{ auth('user')->user()->title. ' at ' . auth('user')->user()->company }}
                            @endif
                        </p>
                        
                            @if (auth()->user()->my_company)
                        <p class="users-title">
                            {{ auth()->user()->my_company->name }}
                        </p>
                            @endif
                        <p class="users-residence">
                            @if (auth('user')->user()->city == '')
                                City
                            @else
                                <span class="capitalize">{{ auth('user')->user()->city }}</span>
                            @endif,
                            @if (auth('user')->user()->country == '')
                                Country
                            @else
                                <span class="capitalize">{{ auth('user')->user()->country }}</span>
                            @endif
                            <a href="javascript:void(0)" class="contact-link">Contact
                                Info</a>
                        </p>
                    </div>

                    <div class="recomended-jobs">
                        <p>Recomended Jobs</p>

                        <div class="flex jobs">

                            @foreach ( $jobs as $job)
                            <div class="job-listing flex">
                                <div class="icon-wrap">
                                    <div class="icon-box">
                                        <span><i class="fas fa-desktop"></i></span>
                                    </div>
                                </div>

                                <div class="job-name">
                                    <p>{{ $job->title }}</p>
                                    <p class="company">{{ $job->company->name }}</p>
                                    <a href="javascript:void" class="easy-apply" data-toggle="apply-modal" data-job="{{ $job->id }}" id="modal-toggle">Easy Apply</a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="user_profile_middle">
        <div class="container">
            <div class="rounded">
                <p class="section-heading">About
                    <button class="edit-btn" id="modal-toggle" data-toggle="about-modal"><i
                            class="fas fa-pencil-alt"></i></button>
                </p>

                <p class="about-desc">
                    {{ auth()->guard('user')->user()->about }}
                </p>
            </div>
        </div>
    </section>


    <section id="user_profile_expeience">
        <div class="container">
            <div class="rounded">
                <p class="section-heading">Work Experience
                    <button class="edit-btn" id="modal-toggle" data-toggle="work-modal"><i
                            class="fas fa-plus"></i></button>
                </p>

                @foreach (auth()->guard('user')->user()->experience
        as $exps)
                    <div class="experience-detail">
                        <div class="flex">

                            <div class="left">
                                <div class="icon-box">
                                    <i class="fab fa-wpexplorer"></i>
                                </div>
                            </div>

                            <div class="right">
                                <p class="title">{{ $exps->job_title }}</p>
                                <p class="company">{{ $exps->company }}</p>
                                <p class="time-span">{{ $exps->joined }} -@if ($exps->left == '')
                                        Present
                                    @else
                                        {{ $exps->left }}
                                    @endif
                                </p>
                            </div>

                            <div class="delete-form">
                                <form action="{{ route('profile.experience') }}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <input type="hidden" value="{{ $exps->id }}" name="exp_id">
                                    <button type="submit" class="delete-btn">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

    <section id="user_skills_section">
        <div class="container">
            <div class="rounded">
                <p class="section-heading">Skills
                    <button class="edit-btn" id="modal-toggle" data-toggle="skills-modal"><i
                            class="fas fa-plus"></i></button>
                </p>

                <div class="flex skills">
                    @foreach (auth()->guard('user')->user()->skills
        as $skill)
                        <div class="col">
                            <div class="skill-pills">
                                <span class="skill-title">{{ $skill->skill }}</span>

                                @for ($i = 0; $i < $skill->ratings; $i++)
                                    <span class="yellow-star">
                                        <i class="fas fa-star"></i>
                                    </span>
                                @endfor
                                @for ($i = 5; $i > $skill->ratings; $i--)
                                    <span class="gray-star">
                                        <i class="fas fa-star"></i>
                                    </span>
                                @endfor
                                <form action="{{ route('profile.skills') }}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <input type="hidden" name="id" id="" value="{{ $skill->id }}">
                                    <button type="submit" class="pill-delete">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </div>
    </section>


    {{-- modals starts here --}}
    <div class="modal-container" id="profile-picture">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">Profile Image</p>
            </div>
            <form action="{{ route('profile.picture') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <div class="file-btn">
                        <input type="file" id="filebtn" name="profile" accept="image/*">
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
            <form action="{{ route('profile.cover') }}" method="POST" enctype="multipart/form-data">
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
            <form action="{{ route('profile.about') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method("put")

                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Job Title*" name="title"
                            value="{{ auth('user')->user()->title }}" autocomplete="no">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-control" id="company-search">
                        <input type="text" class="text-feild" placeholder="Company*" id="company-ajax" name="company"
                            value="{{ auth('user')->user()->company }}" autocomplete="off">

                        <div class="search-result">

                        </div>

                        @error('company')
                            {{ $message }}
                        @enderror
                    </div>


                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="City*" name="city"
                            value="{{ auth()->guard('user')->user()->city }}" autocomplete="no">
                            @error('city')
                                {{ $message }}
                            @enderror
                    </div>
                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Country*" name="country"
                            value="{{ auth()->guard('user')->user()->country }}" autocomplete="no">
                            @error('country')
                                {{ $message }}
                            @enderror
                    </div>
                    <div class="form-control">
                        <input type="phone" class="text-feild" placeholder="Country*" name="phone"
                            value="{{ auth()->guard('user')->user()->phone }}" autocomplete="no">
                            @error('phone')
                                {{ $message }}
                            @enderror
                    </div>
                    <textarea name="about" id="" cols="10" rows="10"
                        class="about-area" placeholder="Your Info...">{{ auth()->guard('user')->user()->about }}</textarea>
                        @error('about')
                            {{ $message }}
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
                <p class="modal-title">First And Last Name</p>
            </div>
            <form action="{{ route('profile.names') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method("put")
                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="First Name*" name="first_name"
                            value="{{ auth()->guard('user')->user()->first_name }}" autocomplete="no">
                    </div>
                    <div class="form-control">
                        <input type="text" class="text-feild" placeholder="Last Name*" name="last_name"
                            value="{{ auth()->guard('user')->user()->last_name }}" autocomplete="no">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-container" id="work-modal">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">Add Your Work Experience</p>
            </div>
            <form action="{{ route('profile.experience') }}" method="POST">
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
                    {{-- max="@php
                    echo date('Y-m-d');
                @endphp" --}}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-container" id="skills-modal">
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

                        <input type="radio" class="star-radio" name="stars" id="star1" value="5" required>
                        <label for="star1" class="stars"><i class="fas fa-star"></i></label>

                        <input type="radio" class="star-radio" name="stars" id="star2" value="4" required>
                        <label for="star2" class="stars"><i class="fas fa-star"></i></label>

                        <input type="radio" class="star-radio" name="stars" id="star3" value="3" required>
                        <label for="star3" class="stars"><i class="fas fa-star"></i></label>

                        <input type="radio" class="star-radio" name="stars" id="star4" value="2" required>
                        <label for="star4" class="stars"><i class="fas fa-star"></i></label>

                        <input type="radio" class="star-radio" name="stars" id="star5" value="1" required>
                        <label for="star5" class="stars"><i class="fas fa-star"></i></label>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-container" id="apply-modal">
        <div class="modal-content">
            <button class="modal-close-icon"><i class="fas fa-times"></i></button>
            <div class="modal-head">
                <p class="modal-title">Apply To This Job</p>
            </div>
            <form action="{{ route('send.request') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-control">
                        <input type="hidden" class="text-feild" placeholder="Country*" name="job" value=""
                            autocomplete="no" id="job-id">
                    </div>
                    <textarea name="message" id="" cols="10" rows="10" class="about-area"
                        placeholder="Your Message Here...."></textarea>
                        @error("message")
                            <p class="validation-message">{{ $message }}</p>
                        @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="save-btn">Send Message</button>
                </div>
            </form>
        </div>
    </div>

@endsection
