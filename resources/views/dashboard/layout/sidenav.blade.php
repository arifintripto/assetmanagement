@guest
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion bg-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-in-alt"></i></div>
                            {{ __('Login') }}
                        </a>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
                    @endif

                    @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                {{ __('Register') }}
                            </a>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
                    @endif
{{--                    <div class="sb-sidenav-menu-heading">Core</div>--}}


                </div>
            </div>
        </nav>
    </div>
@else
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion bg-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('report.create') }}">
                    <div class="sb-nav-link-icon"><i class="far fa-file-alt"></i></div>
                    Create Report
                </a>
                <a class="nav-link" href="{{ route('report.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-sitemap"></i></div>
                    Reports
                </a>
                <a class="nav-link" href="{{ route('hierarchy.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-sitemap"></i></div>
                    Hierarchy
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <strong>{{ Auth::user()->name }}</strong>
            <br>

            <a class="" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>
</div>
@endguest
