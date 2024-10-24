<?php $__env->startSection('content'); ?>
<div class="hero-wrap" style="background-color: rgb(1, 107, 107);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax="properties: { translateY: '70%' }">
                <img src="<?php echo e(asset('images/logo_eventeesFix.svg')); ?>" alt="Eventees HUB Logo"
                    class="hero-logo img-fluid">
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
                    style="background-image: url(<?php echo e(asset('images/tim_eventees.jpg')); ?>); width: 100%;"></div>
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


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-8 heading-section ftco-animate text-center">
                <h2 class="mb-4">Tim EventeesHUB</h2>
                <p>Berikut merupakan seluruh anggota tim dari EventeesHUB</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(<?php echo e(asset('images/Eka_Eventees.jpeg')); ?>);"></div>
                        <div class="info ml-4">
                            <h3><a>Eka Evita Anggraini</a></h3>
                            <span class="position">Hipster</span>
                            <div class="text">
                                <p>CEO <span>EventeesHUB</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(<?php echo e(asset('images/Rudi_Eventees.jpeg')); ?>);"></div>
                        <div class="info ml-4">
                            <h3><a>M. Rohmatul Mauludi</a></h3>
                            <span class="position">Hustler</span>
                            <div class="text">
                                <p>CEO <span>EventeesHUB</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(<?php echo e(asset('images/Rafi_Eventees.jpeg')); ?>);"></div>
                        <div class="info ml-4">
                            <h3><a>M. Rafi Prabowo</a></h3>
                            <span class="position">Hacker</span>
                            <div class="text">
                                <p>CFO <span>EventeesHUB</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(<?php echo e(asset('images/Kiki_Eventees.jpeg')); ?>);"></div>
                        <div class="info ml-4">
                            <h3><a>Achmad Rachmandika Rizky Pratama</a></h3>
                            <span class="position">Hacker</span>
                            <div class="text">
                                <p>CFO <span>EventeesHUB</span></p>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/about.blade.php ENDPATH**/ ?>