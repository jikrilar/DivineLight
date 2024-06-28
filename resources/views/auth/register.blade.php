<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/auth.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(img/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Sign Up
                    </span>
                </div>

                <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
                        <span class="label-input100">Nama</span>
                        <input class="input100" type="text" name="name" placeholder="Masukan nama">
                        <span class="focus-input100"></span>
                    </div>
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
                    <div class="wrap-input100 validate-input m-b-18"
                        data-validate = "Password confirmation is required">
                        <span class="label-input100">Konfirmasi password</span>
                        <input class="input100" type="password" name="password_confirmation"
                            placeholder="Konfirmasi password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
