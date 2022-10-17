@extends("layouts.app")

@section('title', 'Search')

@section('content')
<section id="search-page">
    <div class="container">
        <div class="flex">
            <div class="col-1">
                <div class="img-box">
                    <img src="@if (auth('user')->check() and !empty(auth('user')->user()->profile)) {{ asset('profile_images/' . auth('user')->user()->profile) }}@elseif (auth('company')->check() and !empty(auth('company')->user()->logo)) {{ asset('company_logos/' . auth('company')->user()->logo) }}@else {{ asset('images/web/profile-placeholder.png') }}@endif"
                        alt="">
                </div>
                <p class="username">@if (auth('user')->check()) {{ auth('user')->user()->first_name . ' ' .
                    auth('user')->user()->last_name }}@elseif (auth('company')->check()) {{
                    auth('company')->user()->name }}@endif</p>

                <p class="title">@if (auth('user')->check()) {{ auth('user')->user()->title . ' at ' .
                    auth('user')->user()->company }}@elseif (auth('company')->check() && !empty(auth('company')->user()->service)) {{ auth('company')->user()->service->service }}@endif</p>
            </div>


            <div class="col-2">
                <div class="rounded">
                    <p class="section-heading">Requested Jobs</p>

                    <form action="{{ route('search') }}" method="GET" role="search">
                        @csrf
                        <div class="search-form">
                            <div class="forjob-title-control">
                                <input type="text" name="company" placeholder="Company" value="">
                            </div>
                            <div class="form-control">
                                <input type="text" name="service" placeholder="Services">
                            </div>
                            <div class="form-control">
                                <button class="search-btn">Search</button>
                            </div>
                        </div>
                    </form>

                    <div class="company-search-result">


                        @if ($jobs->count())
                        @foreach ($jobs as $job)
                        <div class="single-result flex">
                            <div class="logo-box">
                                <img src="     @if (empty($job->company->logo))
                                            {{ asset('images/web/profile-placeholder.png') }}
                                        @else

                                            {{ asset('company_logos/' . $job->company->logo) }}
                                            @endif" alt="">
                            </div>

                            <div class="detail-box">
                                <div class="flex">
                                    <p class="job-title">{{ Str::limit($job->title, 25, ' ...') }}</p>
                                    
                                    @if (auth('user')->check())
                                    <a href="javascript:void(0)" class="bookmark"  id="modal-toggle"
                                        data-toggle="about-modal" data-job="{{ $job->id }}" style="margin-left:auto;margin-right:10px;">
                                        Apply <i class="fas fa-file-signature"></i></a>
                                    @elseif(auth('company')->check())
                                    <a href="javascript:void(0)" class="bookmark" id="modal-toggle"
                                        data-toggle="about-modal" data-job="{{ $job->id }}">
                                        Apply <i class="fas fa-file-signature"></i></a>
                                    @else
                                    <a href="{{ route('user_login') }}" class="bookmark">
                                        Apply <i class="fas fa-file-signature"></i></a>
                                    @endif
                                    <input type="text" hidden value="{{ url()->current()."?company=".$job->company->name." &service=".$job->title }}">
                                    <a href="javascript:void(0)" class="bookmark copy-link-btn">
                                        <i class="fas fa-share-alt"></i>
                                    </a>

                                </div>

                                <div class="flex">
                                    <a href="{{ route('company.view', $job->company->id) }}" class="company-name">{{
                                        $job->company->name }}</a>

                                    <p class="posting-details">
                                        <span>{{ $job->created_at->diffForHumans() }}</span>
                                        {{-- <span>21 applicants</span> --}}
                                    </p>
                                </div>
                            </div>


                        </div>
                        @endforeach
                        {{ $jobs->links('vendor.pagination.default') }}

                        @else

                        <p>No Jobs Matches to your search result</p>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="modal-container" id="about-modal">
    <div class="modal-content">
        <button class="modal-close-icon"><i class="fas fa-times"></i></button>
        <div class="modal-head">
            <p class="modal-title">Apply To This Job</p>
        </div>
        <form action="{{ route('send.request') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                <div class="form-control">
                    <input type="hidden" class="text-feild" placeholder="Country*" name="job" value="" autocomplete="no"
                        id="job-id">
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
