@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/styleeventhub.css')}}">
@section('content')

<div class="hero-wrap" style="background-color: #ffc800;" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax="properties: { translateY: '70%' }">
                <img src="{{ asset('images/eventeeslog1.png') }}" alt="Eventees HUB Logo" class="hero-logo">
                <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Penyedia Event JTI
                    Pertama <a href="#">EventeesHUB</a></p>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="#events-section" class="btn btn-white btn-outline-white px-4 py-3">Mulai Event</a>
                </p>
            </div>
        </div>
    </div>
</div>




<section id="events-section" class="wrapper">
    <div class="container">
        <div class="row">
            @foreach ($events as $event)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col"
                    style="background-image:url('{{ asset('storage/event_photos/' . $event->photo) }}');">
                    <img class="card-img d-none" src="{{ asset('storage/event_photos/' . $event->photo) }}"
                        alt="{{ $event->nama_event }}">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2">{{ $event->kode_event }}</small>
                            <h4 class="card-title mt-0 ">
                                <a class="text-dark" href="#">{{ $event->nama_event }}</a>
                            </h4>
                            <small><i class="far fa-clock"></i> {{
                                \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}</small>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                                <img class="mr-3 rounded-circle"
                                    src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                                    alt="Generic placeholder image" style="max-width:50px">
                                <div class="media-body">
                                    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                    <small>Director of UI/UX</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>





<section class="ftco-section-3 img" style="background-image: url({{asset('images/bg_3.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch" style="background-image: url({{asset('images/bg_4.jpg')}});">
                </div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Be a volunteer</h3>
                <form action="#" class="volunter-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
            $('#alert-login').click(function() {
                // berikan waktu 1 detik, lalu arahkan ke halaman login

                {{--if (!{{ auth()->check() }}) {--}}
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You must login first!',
                    footer: '<a href="/login">Login</a>'
                })
                // }
            });

            //buatkan javascript jika tombol donate di klik maka akan menampilkan alert
            {{--document.getElementById('alert-login').onclick = function() {--}}
            {{--    // jika belum melakukan login maka akan menampilkan alert--}}
            {{--    if (!{{ auth()->check() }}) {--}}
            {{--        Swal.fire({--}}
            {{--            icon: 'error',--}}
            {{--            title: 'Oops...',--}}
            {{--            text: 'You must login first!',--}}
            {{--            footer: '<a href="/login">Login</a>'--}}
            {{--        })--}}
            {{--    }--}}
            {{--    Swal.fire({--}}
            {{--        icon: 'error',--}}
            {{--        title: 'Oops...',--}}
            {{--        text: 'Something went wrong!',--}}
            {{--        footer: '<a href="">Why do I have this issue?</a>'--}}
            {{--    })--}}
            {{--};--}}
        })
</script>
@endsection