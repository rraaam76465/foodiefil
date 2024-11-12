<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieFil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('profile.partials.navbar')

    <div class="container my-5">
        <!-- Success/Error messages will be displayed here -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Main content -->
        @yield('content')
    </div>

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

        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
            @csrf
        </form>

        <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
        @endauth
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
