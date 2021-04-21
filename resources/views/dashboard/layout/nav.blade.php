<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Asset Management</a>
    @auth <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button> @endauth


    @guest
        @if (Route::has('login'))
            <a class="btn btn-dark mr-2 ml-auto" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
        @endif
        @if (Route::has('register'))
            <a class="btn btn-dark" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        @endif
    @endguest
    @auth
        <a class="btn btn-dark ml-auto" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endauth
</nav>
