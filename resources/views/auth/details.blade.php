@extends("layouts.app")

@section('title', 'Signup')

@section('content')

    <section id="user-sign-up">
        <div class="container">
            <div class="form-container">
                <h2>Please Provide Your Data</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora enim, et labore hic rerum ea, eveniet
                    officia autem error ratione ullam.
                </p>

                <div class="signup-form">
                    <form action="@if (Auth::guard('user')->check()){{ route('user.add_details') }}@else{{ route('company.add_details') }}@endif" method="POST">
                        @csrf
                        <!--@method("put")-->
                        <h4>Personal Information</h4>

                        @auth('user')
                            <div class="input-row">
                                <div class="form-control input-half">
                                    <input type="text" placeholder="Job Title*" name="title" value="@if (auth('user')->check()){{ auth('user')->user()->title }}@endif">
                                    @error('title')
                                        <p class="validation-message">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-control input-half">
                                    <input type="text" placeholder="Current Company*" name="company"
                                        value="@if (auth('user')->check()){{ auth('user')->user()->company }}@endif">

                                    @error('company')
                                        <p class="validation-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        @endauth

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="url" placeholder="Company Website*" name="website"
                                    value="@if (auth('user')->check()){{ auth('user')->user()->website }}@else{{ auth('company')->user()->website }}@endif">
                                @error('website')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-control input-half">
                                <input type="text" placeholder="Country*" name="country" value="@if (auth('user')->check()){{ auth('user')->user()->country }}@else{{ auth('company')->user()->country }}@endif">
                                @error('country')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="text" placeholder="City*" name="city" value="@if (auth('user')->check()){{ auth('user')->user()->city }}@else{{ auth('company')->user()->city }}@endif"
                                    autocomplete="no">
                                @error('city')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex">

                            <button type="submit" class="signup">Save and Countinue</button>

                            <a class="skip-btn" href="@if (auth("company")->check())
                            {{ route("company.profile") }}
                            @else
                            {{ route("profile") }}
                            @endif">Skip</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
