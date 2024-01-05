<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz7UIi1c_lxuXYvgZB6s5c65qnKAE5LuozTfHZ83P9yw&s">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="main d-flex flex-column justify-content-between ">
        <nav class="navbar  navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-book"> Library Steven</i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    @if(Auth::user())
                        @if(Auth::user()->role_id == 1)
                        <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class="active" @endif><i class="bi bi-speedometer"></i> Dashboard</a>

                        <a href="/books" @if(request()->route()->uri == 'books'|| request()->route()->uri == 'book-add' || request()->route()->uri == 'book-deleted'|| request()->route()->uri == 'book-edit/{$slug}' || request()->route()->uri == 'book-delete/{$slug}' || request()->route()->uri == 'book-restore') class="active" @endif><i class="fas fa-book"></i> Books</a>
                        <a href ="/" @if(request()->route()->uri == '/') class="active" @endif><i class="fas fa-book"></i> Book List</a>

                        <a href="/book-rent" @if(request()->route()->uri == 'book-rent') class="active" @endif><i class="bi bi-bag"></i> book rent</a>

                        <a href="/categories" @if(request()->route()->uri == 'categories' || request()->route()->uri == 'category-add/{$slug}' || request()->route()->uri == 'category-edit/{$slug}'|| request()->route()->uri == 'category-delete/{$slug}' || request()->route()->uri == 'category-restore{$slug}') class="active" @endif><i class="fas fa-list"></i> Categories</a>
                        <a href="/users" @if(request()->route()->uri == 'users' || request()->route()->uri == 'registed-users' || request()->route()->uri == 'user-detail/{slug}' || request()->route()->uri == 'user-ban/{slug}'|| request()->route()->uri == 'users-banned' || request()->route()->uri == 'user-destroy/{slug}') class="active" @endif><i class="fas fa-users"></i> Users</a>

                        <a href="/rent-logs" class="nav-link @if(request()->route()->uri == 'rent-logs') active @endif"><i class="fas fa-history"></i> Rent Logs</a>
                        <a href="/book-return" class="nav-link @if(request()->route()->uri == 'book-return') active @endif"><i class="fas fa-door-open"></i> Book Return</a>
                        <a href="/logout" @if(request()->route()->uri == 'logout') class="active" @endif><i class="fas fa-sign-out-alt"></i> Logout</a>
                        @else
                        <!-- menu untuk client -->

                        <a href="/profile" @if(request()->route()->uri == 'profile') class="active" @endif><i class="fas fa-user"></i> Profile</a>
                        <a href ="/" @if(request()->route()->uri == '/') class="active" @endif><i class="fas fa-book"></i> Book List</a>
                        <a href = /information @if(request()->route()->uri == 'information') class="active" @endif><i class="fas fa-info-circle"></i> Information</a>
                        <a href="/logout" @if(request()->route()->uri == 'logout') class="active" @endif><i class="fas fa-sign-out-alt"></i> Logout</a>
                        @endif
                        @else
                        <a href="/login" @if(request()->route()->uri == 'login') class="active" @endif><i class="fas fa-sign-in-alt"></i> Login</a>
                        <a href="/register" @if(request()->route()->uri == 'register') class="active" @endif><i class="fas fa-user-plus"></i> Register</a>
                        <a href = /information @if(request()->route()->uri == 'information') class="active" @endif><i class="fas fa-info-circle"></i> Information</a>
                        @endif
                </div>

                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
