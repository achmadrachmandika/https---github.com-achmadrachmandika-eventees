<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styleheader.css') }}">

    
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ 
            Auth::user()->hasRole('mahasiswa') ? '/eventmhs' : 
            (Auth::user()->hasRole('dosen') || Auth::user()->hasRole('admin') ? '/eventhub' : '/')
        }}">
            <img src="{{ asset('images/logo_eventeesFix2.svg') }}" alt="Eventees HUB Logo" style="max-height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <li class="nav-item">
                        <a href="{{ Auth::user()->hasRole('admin') || Auth::user()->hasRole('dosen') ? '/eventhub' : '/eventmhs' }}"
                            class="nav-link {{ request()->is('eventhub') || request()->is('eventmhs') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>
                </li>
                
                  <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="/about" class="nav-link">About</a></li>
                
                {{-- <li class="nav-item {{ request()->is('event') ? 'active' : '' }}"><a href="/event" class="nav-link">Event</a></li> --}}
           

                @if(auth()->check())
                <div class="dropdown mt-2">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, {{auth()->user()->name}}
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

