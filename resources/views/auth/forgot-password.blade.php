@extends("layouts.app")

@section("title", "Forgot Password")

@section("content")

    <section id="user-sign-up">
        <div class="container">
            <div class="form-container">
                <h2>Forgot Password</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora enim, et labore hic rerum ea, eveniet officia autem error ratione ullam.
                </p>
                <a href="{{ route("user_login") }}" class="company-signin">Sign In to your User Profile</a>

                <div class="signup-form">
                    <form action="{{ route("password.email") }}" method="POST">
                        @csrf
                        {{-- <h4>Login Information</h4> --}}

                        @if (session("status"))
                        <p class="wrong-login">{{ session("status") }}</p>
                        @endif

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="email" placeholder="Email Address*" name="email" value="" autocomplete="no" value="{{ old("email") }}">
                                @error('email')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <p><a href="{{ route("user_login") }}">Or Sign In Now.</a></p>

                        <button type="submit" class="signup">Sign In</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

