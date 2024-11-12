@extends('layouts2.app')
@section('content')


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="images/event/Edit-30.jpg" alt=""
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Tentang EventeesHUB</h6>
                <h1 class="mb-4">Selamat datang di EventeesHUB</h1>
                <p class="mb-4">Eventees Hub adalah platform inovatif yang dirancang khusus untuk memfasilitasi kolaborasi antara dosen dan mahasiswa
                dalam penyelenggaraan serta partisipasi dalam berbagai event pelatihan di lingkungan jurusan Teknologi Informasi. Kami
                berkomitmen untuk menciptakan pengalaman belajar yang interaktif dan bermanfaat, mendukung pengembangan keterampilan dan
                pengetahuan di era digital.</p>
                <div class="row gy-2 gx-4 mb-4">
                   <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pemateri Berpengalaman</p>
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
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Tim Eventees</h6>
            <h1 class="mb-5">Struktur Organisasi EventeesHUB</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="images/Eka_Eventees.jpeg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Eka Evita Anggraini</h5>
                        <small>Hipster</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="images/Rudi_Eventees.jpeg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">M. Rohmatul Mauludi</h5>
                        <small>Hustler</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="images/Rafi_Eventees.jpeg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">M. Rafi Prabowo</h5>
                        <small>Front End Developer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="images/Kiki_eventees.jpeg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Achmad Rachmandika Rizky Pratama</h5>
                        <small>Backend Developer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
@endsection