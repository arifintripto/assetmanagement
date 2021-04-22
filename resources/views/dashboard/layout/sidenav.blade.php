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
                    @endif
                    @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                {{ __('Register') }}
                            </a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
@else
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav sb-sidenav-dark accordion" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('report.create') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                    Create Report
                </a>
                <a class="nav-link" href="{{ route('report.index') }}">
                    <div class="sb-nav-link-icon"><i class="far fa-chart-bar"></i></div>
                    Reports
                </a>
                <a class="nav-link" href="{{ route('hierarchy.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-sitemap"></i></div>
                    Hierarchy
                </a>
                <a class="nav-link" href="{{ route('sim.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-sim-card"></i></div>
                    Sim
                </a>
                <a class="nav-link" href="{{ route('item.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-dice-d6"></i></div>
                    Item
                </a>



            </div>
        </div>
        <div class="sb-sidenav-footer">
            <small id="" class="form-text text-muted text-center">{{ Auth::user()->name }}</small>
        </div>
    </nav>
</div>
@endguest
