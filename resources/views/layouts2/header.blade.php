<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{ asset('images/logo_eventeesFix2.svg') }}" alt="Eventees HUB Logo" style="max-height: 50px;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            @if(Auth::check() && Auth::user()->hasAnyRole(['admin', 'mahasiswa', 'dosen']))
            <a href="{{ Auth::user()->hasRole('admin') || Auth::user()->hasRole('dosen') ? '/eventhub' : '/eventmhs' }}"
                class="nav-item nav-link {{ request()->is('eventhub') || request()->is('eventmhs') ? 'active' : '' }}">
                Home
            </a>
            @else
            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            @endif
            <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
            @if(auth()->check())
            <div class="dropdown nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <div style="color: red">Sign Out</div>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
            @else
            <a href="{{ route('login') }}"
                class="nav-item nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
            @endif
        </div>
    </div>
</nav>