@extends('layouts2.app')
@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="images/event/Edit-32.jpg" alt="">

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Selamat Datang di Eventees Hub</h5>
                            <h1 class="display-3 text-white animated slideInDown">Jadilah Generasi Emas</h1>

                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="images/event/Edit-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Selamat Datang di Eventees Hub</h5>
                            <h1 class="display-3 text-white animated slideInDown">Jadilah Generasi Emas
                            </h1>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">Instruktur Terampil</h5>
                        <p>Pengajar berpengalaman yang siap membantu Anda belajar dengan efektif dan efisien.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">Kelas Daring</h5>
                        <p>Belajar dari mana saja dengan akses ke kelas daring yang fleksibel dan interaktif.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-home text-primary mb-4"></i>
                        <h5 class="mb-3">Proyek Rumah</h5>
                        <p>Mengerjakan proyek-proyek praktis dari rumah untuk meningkatkan keterampilan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">Perpustakaan Buku</h5>
                        <p>Akses ke koleksi buku yang lengkap untuk mendukung proses pembelajaran Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="images/event/Edit-36.jpg" alt=""
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
                <h1 class="mb-4">Selamat Datang di EventeesHUB</h1>
                <p class="mb-4">Penyelenggara pelatihan pertama di JTI Polinema</p>
                <p class="mb-4"></p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pemateri Berpengalaman
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kelas Online</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kelas Offline</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Interaktif</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sertifikat</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/about">Read More</a>
                </div>
            </div>
        </div>
    </div>
<!-- About End -->


<!-- Categories Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Kategori</h6>
            <h1 class="mb-5">kategori Pelatihan</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="images/digital.jpg" alt="">
                            <div class="bg-primary text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Digital Marketing</h5>
                                <small class="text-primary"></small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="images/java.png" alt="">
                            <div class="bg-primary text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Java</h5>
                                <small class="text-primary"></small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="images/laravel.jpg" alt="">
                            <div class="bg-primary text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Laravel</h5>
                                <small class="text-primary"></small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="#">
                    <img class="img-fluid position-absolute w-100 h-100" src="images/ai.jpg" alt=""
                        style="object-fit: cover;">
                    <div class="bg-primary text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">AI</h5>
                        <small class="text-primary"></small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Categories Start -->


<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Event Pelatihan</h6>
            <h1 class="mb-5">Akan diselenggarakan</h1>
        </div>

        @if (Auth::check() && Auth::user()->hasRole('mahasiswa'))
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
            @if ($event->kuota > 0)
            <!-- Only show event if there is available quota -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('storage/' . $event->photo) }}" alt="Event Image">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="{{ route('eventhub.show', ['kode_event' => $event->kode_event]) }}"
                                class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="{{ route('eventhub.show', ['kode_event' => $event->kode_event]) }}"
                                class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Rp.{{ number_format($event->harga, 0, ',', '.') }}</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">{{ $event->nama_event }}</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-clock text-primary me-2"></i> Rp.{{
                            \Carbon\Carbon::parse($event->jam)->format('H:i:s') }}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{
                            $event->kuota }} Peserta</small>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>
        @else
        <p>Anda harus login untuk melihat event pelatihan.</p>
        @endif
    </div>
</div>


<!-- Testimonial Start -->
{{-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="mb-5">Our Students Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Testimonial End -->

@endsection