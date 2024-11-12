<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">FoodieFil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-3"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item dropdown mr-3">
                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                    <a class="dropdown-item" href="#">Rice</a>
                    <a class="dropdown-item" href="#">Noodles</a>
                    <a class="dropdown-item" href="#">Meat</a>
                    <a class="dropdown-item" href="#">Seafood</a>
                    <a class="dropdown-item" href="#">Desserts</a>
                    <a class="dropdown-item" href="#">Vegetables</a>
                </div>
            </li>
            <li class="nav-item mr-3"><a class="nav-link" href="#">Browse</a></li>

            <!-- Show Login and Register links only when the user is not logged in -->
            @guest
                <li class="nav-item mr-3"><a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#registerModal">Register</a></li>
            @endguest

            <!-- Show Profile and Logout links when the user is logged in -->
            @auth
                <li class="nav-item mr-3"><a class="nav-link" href="{{ route('account') }}">My Account</a></li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                    <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
