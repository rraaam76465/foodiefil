<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieFil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <!-- Navbar -->
    @include('profile.partials.navbar')
    
    <!-- Main content -->
    <div class="container my-5">
        @yield('content')
    </div>
    
    <!-- Modals -->
    @include('profile.partials.login_modal')
    @include('profile.partials.register_modal')
    
    <div class="container text-center">
        @guest
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
        @endguest

        @auth
        <p>Welcome, {{ Auth::user()->name }}!</p>
        <a href="{{ route('account') }}" class="btn btn-success">My Account</a>
        <a href="{{ route('profile.edit') }}" class="btn btn-warning">Edit Profile</a>
        @endauth
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>