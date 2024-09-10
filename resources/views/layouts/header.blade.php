<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/home">Eventees HUB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}"><a href="/home"
                        class="nav-link">Home</a></li>
                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="/about"
                        class="nav-link">About</a></li>
                @if(auth()->check())
                {{-- <li class="nav-item {{ request()->is('donateform') ? 'active' : '' }}"><a href="{{ route('donation') }}"
                        class="nav-link">Ticket</a></li> --}}
                @else
                <li class="nav-item {{ request()->is('donate') ? 'active' : '' }}" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><a href="#" class="nav-link ">Ticket</a></li>
                @endif
                <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}"><a href="/blog"
                        class="nav-link">Blog</a></li>
                <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}"><a href="/gallery"
                        class="nav-link">Gallery</a></li>
                <li class="nav-item {{ request()->is('event') ? 'active' : '' }}"><a href="/event"
                        class="nav-link">Events</a></li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="/contact"
                        class="nav-link">Contact</a></li>

                @if(auth()->check())
                <div class="dropdown mt-2">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, {{auth()->user()->name}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Your Donate</a></li>
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
                {{-- <div class="dropdown mt-2">
                    <a class="btn btn-secondary" href="{{route('donation')}}" role="button" aria-expanded="false">
                        Login
                    </a>
                </div> --}}
                @endif

            </ul>
        </div>
    </div>
</nav>
