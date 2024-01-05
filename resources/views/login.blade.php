<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Perpustakaan | Login Page</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz7UIi1c_lxuXYvgZB6s5c65qnKAE5LuozTfHZ83P9yw&s">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<style>
    /* Rest of your CSS styles here */
</style>
<body>
<div class="bg-img">
    <div class="content">
        <header>Login Form</header>

        <!-- Display session status message if available -->
        @if(session('status'))
        <script>
            // JavaScript code to show a popup alert with the session status message
            alert("{{ session('message') }}");
        </script>
        @endif

        <form action="#" method="post">
            @csrf
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" required placeholder="Email or Phone" autocomplete="username" name="username" id="username">
            </div>
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" class="pass-key" required placeholder="Password" name="password" id="password" autocomplete="current-password">
                <span class="show">SHOW</span>
            </div>

            <!-- New captcha fields -->
            <div class="field space">
                <input type="text" readonly placeholder="Captcha" name="captcha" id="captcha">
            </div>
            <div class="field space">
                <span class="fa fa-key"></span>
                <input type="text" required placeholder="Enter Captcha verification..." name="captchaInput" id="captchaInput">
            </div>

            <div class="pass">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="field">
                <input type="submit" value="LOGIN" onclick="validateCaptcha()">
            </div>
        </form>
        <br>
        <div class="signup">
            Don't have an account?
            <a href="register">Register Now</a>
        </div>
    </div>
</div>
<script src="{{ asset('js/index.js') }}"></script>

<script src="{{ asset('js/captcha.js') }}"></script>

</body>
</html>
