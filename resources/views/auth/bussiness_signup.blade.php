@extends("layouts.app")

@section('title', 'Bussiness Register')

@section('content')

    <section id="user-sign-up">
        <div class="container">
            <div class="form-container">
                <h2>Bedrijfs registratie</h2>
                <!-- <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora enim, et labore hic rerum ea, eveniet
                    officia autem error ratione ullam.
                </p> -->
                {{-- <a href="{{ route('user_register') }}" class="company-signin">Sign Up as a User</a> --}}

                <div class="signup-form">
                    <form action="{{ route('company_register') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <h4>Informatie</h4>

                        <div class="input-row">
                            <div class="form-control input-full">
                                <input type="text" placeholder="Bedrijfsnaam*" name="name"
                                    value="{{ old('name') }}">

                                @error('name')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="form-control input-full">
                                <input type="text" placeholder="Beschrijving*" name="description"
                                    value="{{ old('description') }}">
                                @error('description')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">

                            <div class="form-control file-btn input-half">
                                <p>Portfolio</p>
                                <input type="file" id="filebtn" name="portfolio" accept="image/*">
                                <label for="filebtn">Choose File</label>
                                @error('portfolio')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-control input-half">
                                <input type="number" placeholder="Bedrijfsomvang*" name="size"
                                    value="{{ old('size') }}">

                                @error('size')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">

                            <div class="form-control input-half">
                                <input type="email" placeholder="E-mailadres*" name="email"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-control input-half">
                                <input type="phone" placeholder="Telefoon*" name="phone"
                                    value="{{ old('phone') }}">

                                @error('phone')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="password" placeholder="Password*" name="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-control input-half">
                                <input type="password" placeholder="Wachtwoordbevestiging*" name="password_confirmation">
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="url" placeholder="Bedrijfswebsite*" name="website"
                                    value="">
                                @error('website')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-control input-half">
                                <input type="text" placeholder="Land*" name="country" value="">
                                @error('country')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="form-control input-half">
                                <input type="text" placeholder="Stad*" name="city" value="" autocomplete="no">
                                @error('city')
                                    <p class="validation-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <p><a href="{{ route('comapny_login') }}">Al geregistreerd? Meld u nu aan.</a></p>
                        <button type="submit" class="signup">Aanmelden</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
