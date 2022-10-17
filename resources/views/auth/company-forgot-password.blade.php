@extends("layouts.app")

@section("title", "Forgot Password")

@section("content")

    <section id="user-sign-up">
        <div class="container">
            <div class="form-container">
                <h2>Wachtwoord vergeten</h2>
                <!-- <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora enim, et labore hic rerum ea, eveniet officia autem error ratione ullam.
                </p> -->
                <a href="{{ route("user_login") }}" class="company-signin">Meld u aan bij uw bedrijfsprofiel</a>

                <div class="signup-form">
                    <form action="{{ route("company.password.email") }}" method="POST">
                        @csrf
                        {{-- <h4>Login Information</h4> --}}

                        @if (session("status"))
                        <p class="wrong-login">{{ session("status") }}</p>
                        @endif

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="email" placeholder="E-mailadres*" name="email" value="" autocomplete="no" value="{{ old("email") }}">
                                @error('email')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <p><a href="{{ route("comapny_login") }}">Of log nu in.</a></p>

                        <button type="submit" class="signup">Verzend mail</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

