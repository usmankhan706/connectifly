@extends("layouts.app")

@section("title", "Sign-in")

@section("content")

    <section id="user-sign-up">
        <div class="container">
            <div class="form-container">
                <h2>Zakelijk inloggen</h2>
                <!-- <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora enim, et labore hic rerum ea, eveniet officia autem error ratione ullam.
                </p> -->
                <a href="{{ route('user_login') }}" class="company-signin">Meld u aan bij uw gebruikersprofiel</a>

                <div class="signup-form">
                    <form action="{{ route('comapny_login') }}" method="POST">
                        @csrf
                        <h4>Login Informatie</h4>

                        @if (session("status"))
                        <p class="wrong-login">{{ session("status") }}</p>
                        @endif

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="email" placeholder="E-mailadres*" name="email" value="" autocomplete="off" value="{{ old('email') }}">
                                @error('email')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-control input-half">
                                <input type="password" placeholder="Wachtwoord*" name="password" autocomplete="off">
                                @error('password')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <p><a href="{{ route('company_register') }}">Nog niet geregistreerd? Meld u nu aan.</a></p>
                        <p><a href="{{ route('company.password.request') }}">Wachtwoord vergeten?</a></p>

                        <button type="submit" class="signup">Log in</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

