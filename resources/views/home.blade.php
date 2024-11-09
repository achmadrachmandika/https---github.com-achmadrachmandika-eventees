@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/styleeventhub.css') }}">

<style>
    #hero-wrap01 {
        background-image: url('{{ asset(' images/event/Edit-40.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
    }

    @media (max-width: 768px) {
        #hero-wrap01 {
            height: 70vh;
        }

        .breadcrumbs,
        .bread {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        #hero-wrap01 {
            height: 50vh;
        }

        .breadcrumbs,
        .bread {
            font-size: 1.2rem;
        }
    }
</style>
@section('content')
<div id="hero-wrap01"
    style="background-image: url({{asset('images/event/Edit-32.jpg')}}); background-size: cover; background-position: center; background-repeat: no-repeat;"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax="properties: { translateY: '70%' }">
                <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Penyedia Event JTI
                    Pertama</p>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="#" class="btn btn-white btn-outline-white px-4 py-3" data-toggle="modal" data-target="#loginModal">Cari
                        Event</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Silahkan Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Jika ingin melihat Event silahkan melakukan login terlebih dahulu.</p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<section class="py-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">EventeesHUB</h2>
                <p class="text-secondary mb-5 text-center lead fs-4">Kami telah berhasil menyelenggarakan event
                    pelatihan bagi industri yang dihadiri
                    oleh perwakilan dari 5 perusahaan yang telah bekerja sama dengan Polinema
                </p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container overflow-hidden">
        <div class="row gy-5 gy-md-6 gy-lg-0">
            <div class="col-6 col-lg-3">
                <div class="text-center">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-3 mx-auto bsb-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-people text-white" viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </div>
                    <h5 class="display-6 fw-bold m-1">1</h5>
                    <p class="text-secondary m-0">Pelatihan Terselenggara</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-3 mx-auto bsb-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-activity text-white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                        </svg>
                    </div>
                    <h5 class="display-6 fw-bold m-1">1+</h5>
                    <p class="text-secondary m-0">Masalah yang terpecahkan</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-3 mx-auto bsb-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-briefcase text-white" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </div>
                    <h5 class="display-6 fw-bold m-1">2</h5>
                    <p class="text-secondary m-0">Proyek</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-3 mx-auto bsb-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-award text-white" viewBox="0 0 16 16">
                            <path
                                d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                        </svg>
                    </div>
                    <h5 class="display-6 fw-bold m-1">1</h5>
                    <p class="text-secondary m-0">Awwwards Winning</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="eventees_1" class="wrapper">
    <div class="intro-section text-center mb-5">
        <h2 class="eventees-title2">"{Wadah Edukasi Jembatan Prestasi}"</h2>
        <p class="eventees-text2">Jelajahi berbagai acara menarik yang kami tawarkan. Temukan kegiatan yang sesuai
            dengan
            minat Anda dan bergabunglah dengan kami dalam setiap momen spesial. Jangan lewatkan kesempatan untuk menjadi
            bagian dari pengalaman tak terlupakan!</p>
    </div>

    @if (Auth::check() && Auth::user()->hasRole('mahasiswa'))
    <div class="container">
        <div class="row">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            @if ($events->isEmpty())
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    <strong>Tidak ada event yang tersedia saat ini.</strong>
                </div>
            </div>
            @else
            @foreach ($events as $event)
            @if ($event ->kuota > 0)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col"
                    onclick="handleCardClick('{{ route('eventhub.show', ['kode_event' => $event->kode_event]) }}', {{ auth()->check() ? 'true' : 'false' }})"
                    style="background-image:url('{{ asset('storage/' . $event->photo) }}');">
                    <img class="card-img d-none" src="{{ asset('storage/' . $event->photo) }}"
                        alt="{{ $event->nama_event }}">

                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2">{{ $event->kode_event }}</small>
                            <h4 class="card-title mt-0">
                                <a class="text-dark" href="#">{{ $event->nama_event }}</a>
                            </h4>

                            <h4 class="card-title mt-0">
                                <a class="text-dark" href="#">Rp.{{ number_format($event->harga, 0, ',', '.') }}</a>
                            </h4>

                            <h4 href="#"
                                style="color: {{ $event->kuota < 10 ? 'red' : 'green' }}; text-decoration: none;">
                                Kuota tersisa: {{ $event->kuota }}
                            </h4>

                            <small><i class="far fa-clock"></i> {{
                                \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}</small>
                            <br>
                            <small><i class="far fa-clock"></i> {{
                                \Carbon\Carbon::parse($event->jam)->format('H:i:s') }}</small>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                                <img class="mr-3 rounded-circle" src="{{ asset('images/eventeeslog1.png') }}"
                                    alt="Eventees Logo" style="max-width:100px">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>
    </div>
    @else
    {{-- <div class="alert alert-warning text-center">
        Anda harus menjadi mahasiswa untuk melihat acara ini. Silakan <a href="{{ route('login') }}">login</a> atau
        daftar.
    </div> --}}
    @endif
</section>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Silahkan Login Terlebih Dahulu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Anda harus login untuk melihat detail acara ini.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section-3 img"
    style="background-image: url({{ asset('images/event/Edit-7.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch"
                    style="background-image: url({{ asset('images/logo_eventeesFix2.svg') }});">
                </div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Kritik dan Saran</h3>

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(Auth::check())
                <form id="feedback-form" action="{{ route('feedback.store') }}" method="POST" class="volunter-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required
                            value="{{ Auth::user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required
                            value="{{ Auth::user()->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                    </div>
                </form>
                @else
                <p>Anda harus <a href="{{ route('login') }}">login</a> untuk memberikan kritik dan saran.</p>
                @endif
            </div>
        </div>
    </div>
</section>
</section>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#alert-login').click(function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You must login first!',
                footer: '<a href="/login">Login</a>'
            });
        });

        $(window).on('scroll', function() {
            var scrollPos = $(document).scrollTop();
            $('.nav-link').each(function() {
                var currLink = $(this);
                var refElement = $(currLink.attr('href'));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('.nav-link').removeClass('active');
                    currLink.addClass('active');
                } else {
                    currLink.removeClass('active');
                }
            });
        });
    });

    function handleCardClick(url, isLoggedIn) {
        if (isLoggedIn) {
            window.location.href = url;
        } else {
            $('#loginModal').modal('show');
        }
    }

    document.getElementById('feedback-form').addEventListener('submit', function(event) {
        event.preventDefault();
        @if(!Auth::check())
            alert('Anda harus login terlebih dahulu untuk mengirim kritik dan saran.');
            window.location.href = "{{ route('login') }}";
        @else
            this.submit(); // Proceed with form submission
        @endif
    });
</script>
@endsection