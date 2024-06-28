<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(img/lamp-login.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>

                <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Masukan email">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Masukan password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn" style="margin-bottom: 10px">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                    <p>Don't have account? <a href="{{ route('register') }}">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
