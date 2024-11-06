@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/styleeventhub.css') }}">

@section('content')



<div id="hero-wrap"
    style="background-image: url({{asset('images/event/Edit-32.jpg')}}); background-size: cover; background-position: center; background-repeat: no-repeat;"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax="properties: { translateY: '70%' }">
                {{-- <img src="{{ asset('images/logo_eventeesFix.svg') }}" alt="Eventees HUB Logo" class="hero-logo img-fluid"> --}}
                <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Penyedia Event JTI
                    Pertama <a href="#"></a></p>
                       <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="#eventees_1" class="btn btn-white btn-outline-white px-4 py-3">Cari Event</a>
                </p>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a data-toggle="modal" class="btn btn-white btn-outline-white px-4 py-3" data-target="#createEventModal">Request Event</a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- rgb(1, 107, 107); --}}

<section id="eventees_1" class="wrapper">
    <div class="intro-section text-center mb-5">
        <h2 class="eventees-title2">"{Wadah Edukasi Jembatan Prestasi}"</h2>
        <p class="eventees-text2">Jelajahi berbagai acara menarik yang kami tawarkan. Temukan kegiatan yang sesuai
            dengan minat Anda dan bergabunglah dengan kami dalam setiap momen spesial. Jangan lewatkan kesempatan untuk
            menjadi bagian dari pengalaman tak terlupakan!</p>
    </div>

    @if (Auth::check() && (Auth::user()->hasRole('dosen') || Auth::user()->hasRole('admin')))
    <div class="container">
        <div class="row">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
    
            @if ($eventdosens->isEmpty())
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    <strong>Tidak ada event yang tersedia saat ini.</strong>
                </div>
            </div>
            @else
            @foreach ($eventdosens as $eventdosen)
            @if ($eventdosen->kuota > 0)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col"
                    onclick="handleCardClick('{{ route('eventhub.showdosen', ['kode_evndsn' => $eventdosen->kode_evndsn]) }}', {{ auth()->check() ? 'true' : 'false' }})">
                    <img class="card-img d-none" src="{{ asset('storage/' . $eventdosen->photo) }}"
                        alt="{{ $eventdosen->nama_event }}">
    
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2">{{ $eventdosen->kode_evndsn }}</small>
                            <h4 class="card-title mt-0">
                                <a class="text-dark" href="#">{{ $eventdosen->nama_event }}</a>
                            </h4>
    
                            <h4 class="card-title mt-0">
                                <a class="text-dark" href="#">{{ $eventdosen->kuota }} Kuota Tersedia</a>
                            </h4>
    
                            <small><i class="far fa-clock"></i> {{
                                \Carbon\Carbon::parse($eventdosen->tanggal)->format('d-m-Y') }}</small>
                            <br>
                            <small><i class="far fa-clock"></i> {{
                                \Carbon\Carbon::parse($eventdosen->jam)->format('H:i:s') }}</small>
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
    @endif
</section>
<!-- Create Event Modal -->
    <div class="modal fade" id="createEventModal" tabindex="-1" role="dialog" aria-labelledby="createEventModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createEventModalLabel">Request Event yang akan diselenggarakan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="event-form" action="{{ route('eventreqdosens.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="kode_dosen">Kode Dosen</label>
                            <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" required>
                        </div>
                        <div class="form-group">
                            <label for="training_topic">Topik Pelatihan (optional)</label>
                            <input type="text" class="form-control" id="training_topic" name="training_topic">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <!-- Catatan -->
                        <div class="alert alert-info" role="alert">
                            Jika ingin melakukan pelatihan, diharapkan untuk menyediakan jadwal setelah pendaftaran.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>

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

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    });
</script>
<script>
    $(document).ready(function() {
$(window).on('scroll', function() {
var scrollPos = $(document).scrollTop();
$('.nav-link').each(function() {
var currLink = $(this);
var refElement = $(currLink.attr('href'));
if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height()> scrollPos) {
    $('.nav-link').removeClass('active');
    currLink.addClass('active');
    } else {
    currLink.removeClass('active');
    }
    });
    });
    });
</script>
<script>
    function navigateToEvent(url) {
        window.location.href = url;
    }
</script>

<script>
    document.getElementById('feedback-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Check if the user is authenticated
        @if(!Auth::check())
            alert('Anda harus login terlebih dahulu untuk mengirim kritik dan saran.');
            window.location.href = "{{ route('login') }}";
        @else
            this.submit(); // Proceed with form submission
        @endif
    });
</script>

<script>
    function handleCardClick(url, isLoggedIn) {
        if (isLoggedIn) {
            window.location.href = url;
        } else {
            $('#loginModal').modal('show');
        }
    }
</script>
@endsection