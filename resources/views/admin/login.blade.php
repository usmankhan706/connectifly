<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conect It - Admin Login</title>
    <link rel="shortcut icon" href="{{ asset("images/web/connect-it-logo2.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <section id="admin-login">
        <div class="form-container">
            <div class="logo-box">
                <img src="{{ asset("images/web/connect-it-logo.png") }}" alt="">
            </div>
            <form class="form-box" action="" method="POST">
                <h2>Login As Admin</h2>
                @csrf
                @if (session("status"))
                    <p class="wrong-login">{{ session("status") }}</p>
                @endif
                <div class="">
                    <input type="text" placeholder="Email" name="email">
                    @error('email')
                        <p class="validation-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <input type="password" placeholder="Password" name="password">
                    @error('password')
                        <p class="validation-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <button type="submit">Signin</button>
                </div>
            </form>
        </div>
    </section>


</body>
</html>
