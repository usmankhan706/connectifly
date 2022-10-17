@extends("layouts.app")

@section('title', 'Signup')

@section('content')

    <section id="user-sign-up">
        <div class="container">
            <div class="form-container">
                <h2>Personal Account Sign Up</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora enim, et labore hic rerum ea, eveniet
                    officia autem error ratione ullam.
                </p>
                {{-- <a href="{{ route("company_register") }}" class="company-signin">Sign Up as a Business</a> --}}

                <div class="signup-form">
                    <form action="@if (auth('company')->check()){{ route('company.add_details') }}@else{{ route('user_register') }}@endif" method="POST">
                        @csrf
                        <h4>Personal Information</h4>

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="text" placeholder="First Name*" name="first_name" value="{{ old("first_name") }}">

                                @error('first_name')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-control input-half">
                                <input type="text" placeholder="Last Name*" name="last_name" value="{{ old("last_name") }}">
                                @error('last_name')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="phone" placeholder="Phone Number*" name="phone" value="{{ old("phone") }}">
                                @error('phone')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-control input-half">
                                <input type="email" placeholder="Email Address*" name="email" value="{{ old("email") }}" autocomplete="no">
                                @error('email')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="password" placeholder="Password*" name="password" value="{{ old("password") }}">
                                @error('password')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-control input-half">
                                <input type="password" placeholder="Password Confirmation*" name="password_confirmation">
                            </div>
                        </div>

                        {{-- <p><a href="{{ route('user_login') }}">Already Registered? Sign In Now.</a></p> --}}
                        <button type="submit" class="signup">Sign Up</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
