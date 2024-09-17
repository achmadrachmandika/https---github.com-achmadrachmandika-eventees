<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap">
<style>
    body {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
    }

    .navbar-brand {
        font-family: 'Montserrat', sans-serif;
        /* Ganti dengan font yang diinginkan */
        font-weight: 800;
        /* Berat font */
        font-size: 54px;
        /* Ukuran font */
        letter-spacing: 0px;
        /* Jarak antar huruf */
        color: #FFA500;
        /* Warna oranye untuk menyesuaikan dengan tema */
        text-transform: uppercase;
        /* Mengubah teks menjadi huruf kapital */
        transition: color 0.3s ease;
        /* Transisi warna saat hover */
    }

    .navbar-brand:hover {
        color: #FF6F61;
        /* Warna saat hover */
    }
    /* Gaya dasar untuk navbar item */
    .nav-link {
    color: #fff; /* Warna teks navbar */
    padding: 10px 15px;
    transition: background-color 0.3s ease, color 0.3s ease;
    text-transform: uppercase;
    }
    
    /* Gaya untuk item navbar aktif */
    .nav-item.active .nav-link {
    background: linear-gradient(90deg,#FFA500);
    color: #fff;
    border-radius: 5px;
    font-weight: bold;
    }
    
    /* Gaya untuk navbar item saat hover */
    .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Warna latar belakang saat hover */
    color: #FFA500; /* Warna teks saat hover */
    border-radius: 5px;
    }

    
</style>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/eventhub">Eventees HUB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('hero-wrap') ? 'active' : '' }}">
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="#hero-wrap" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                    <a href="/about" class="nav-link">About</a>
                </li>
                <li class="nav-item {{ request()->is('events-section') ? 'active' : '' }}">
                    <a href="#events-section" class="nav-link">Events</a>
                </li>
           

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
