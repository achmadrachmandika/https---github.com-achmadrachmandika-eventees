@extends('layouts.app')

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
<style>
    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .gallery-container a {
        flex: 1 1 calc(25% - 15px);
        min-width: calc(50% - 15px);
        /* Ensure minimum size for small screens */
        background-size: cover;
        background-position: center;
        height: 250px;
        position: relative;
    }

    @media (max-width: 768px) {
        .gallery-container a {
            flex: 1 1 calc(50% - 15px);
        }
    }

    @media (max-width: 576px) {
        .gallery-container a {
            flex: 1 1 100%;
        }
    }
</style>
@section('content')
<div id="hero-wrap01"
    style="background-image: url({{asset('images/event/Edit-40.jpg')}}); background-size: cover; background-position: center; background-repeat: no-repeat;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax="properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tentang
                    EventeesHUB</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-about align-self-stretch"
                    style="background-image: url({{asset('images/event/eventees1.JPG')}}); width: 100%;"></div>
            </div>
            <div class="col-md-6 pl-md-5 ftco-animate">
                <h2 class="mb-4">Selamat datang di EventeesHUB</h2>
                <p>Eventees Hub adalah platform inovatif yang dirancang khusus untuk memfasilitasi kolaborasi antara dosen dan mahasiswa
                dalam penyelenggaraan serta partisipasi dalam berbagai event pelatihan di lingkungan jurusan Teknologi Informasi. Kami
                berkomitmen untuk menciptakan pengalaman belajar yang interaktif dan bermanfaat, mendukung pengembangan keterampilan dan
                pengetahuan di era digital.</p>
            </div>
        </div>

       
    </div>
</section>

<section class="ftco-gallery">
    <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-8 heading-section ftco-animate text-center">
            <h2 class="mb-4">Event yang telah Diselenggarakan</h2>
            <p>Berikut merupakan dokumentasi dari event yang telah kami selenggarakan</p>
        </div>
    </div>
    <div class="d-md-flex">
        <a href="{{asset('images/event/edit-11.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/event/Edit-11.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/event/edit-7.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/event/Edit-7.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/event/edit-36.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/event/Edit-36.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/event/edit-20.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/event/Edit-20.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
    </div>
    </div>
</section>
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Tim EVENTEESHUB</h2>
                    <p>Berikut merupakan anggota tim dari eventeeshub yang dipertemukan melalui program KWUJTI periode 2</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{('images/Eka_Eventees.jpeg')}});"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">Eka Evita Anggraini</a></h3>
                                <span class="position">Hipster</span>
                                <div class="text">
                                    <p>Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{('images/Rudi_Eventees.jpeg')}});"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">M. Rohmatul Mauludi</a></h3>
                                <span class="position">Hustler</span>
                                <div class="text">
                                    <p>Perancang RAB dan Strategi pemasaran</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{('images/Rafi_Eventees.jpeg')}});"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">M. Rafi Prabowo</a></h3>
                                <span class="position">Hacker</span>
                                <div class="text">
                                    <p>Front End Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{('images/Kiki_eventees.jpeg')}});"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">Achmad Rachmandika R.P</a></h3>
                                <span class="position">Hacker</span>
                                    <div class="text">
                                        <p>Backend Developer</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="memberModalLabel">Detail Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="memberDetails"></p>
            </div>
        </div>
    </div>
</div>
@endsection