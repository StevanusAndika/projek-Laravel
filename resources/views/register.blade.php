<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Perpustakaan | Registration Page</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz7UIi1c_lxuXYvgZB6s5c65qnKAE5LuozTfHZ83P9yw&s">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="bg-img">
    <div class="content">
        <header>Registration Form</header>

        <form action=" " method="post">
          <!-- CSRF token here -->
          @csrf

            @if ($errors->any())
                <script>
                    // Display errors in a JavaScript alert
                    alert("{{ implode('\n', $errors->all()) }}");
                </script>
            @endif
            <!-- End of error block -->

             <!-- Display session status message if available -->
        @if(session('status'))
        <script>
            // JavaScript code to show a popup alert with the session status message
            alert("{{ session('message') }}");
        </script>
    @endif


            <!-- Add fields for registration information -->
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" placeholder="Username" name="username"  id="username">
            </div>

            <div class="field">
                <span class="fa fa-phone"></span>
                <input type="text" placeholder="Phone" name="phone" id="phone">
            </div>

            <div class="field">
                <span class="fa fa-map-marker"></span>
                <input type="text" placeholder="Address" name="address"> <!-- Added name attribute -->
            </div>

            <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" class="pass-key"  placeholder="Password" name="password" id="password">
                <span class="show">SHOW</span>
            </div>
            <!-- Add more fields as needed -->
            <div class="field">
                <input type="submit" value="REGISTER">
            </div>
        </form> <!-- Closing form tag was missing -->

        <br>
        <div class="signup">
            Already have an account?
            <a href="login">Login Now</a>
        </div>
    </div>
</div>
<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
