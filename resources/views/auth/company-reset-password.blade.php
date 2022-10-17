@extends("layouts.app")

@section('title', 'Reset Password')

@section('content')

    <section id="user-sign-up">
        <div class="container">
            <div class="form-container">
                <h2>Company Password Reset</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora enim, et labore hic rerum ea, eveniet
                    officia autem error ratione ullam.
                </p>
                <a href="{{ route("comapny_login") }}" class="company-signin">Sign In as a Business</a>

                <div class="signup-form">
                    <form action="{{ route('company.password.update') }}" method="POST">
                        @csrf
                        <h4>Personal Information</h4>

                        @if ($errors->has("email"))
                        <p class="wrong-login">{{ $errors->first("email") }}</p>
                        @endif
                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="hidden" placeholder="First Name*" name="token" value="{{ $token }}">
                            </div>
                            <div class="form-control input-half">
                                <input type="hidden" placeholder="" name="email" value="{{ $_GET['email'] }}">
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

                        <p><a href="{{ route('user_login') }}">Or Sign In Now.</a></p>
                        <button type="submit" class="signup">Send Mail</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
