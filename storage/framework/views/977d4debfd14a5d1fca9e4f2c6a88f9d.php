<link rel="stylesheet" href="<?php echo e(asset('css/styleeventhub.css')); ?>">
<?php $__env->startSection('content'); ?>

<div id="hero-wrap" style="background-color: rgb(1, 107, 107);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax="properties: { translateY: '70%' }">
                <img src="<?php echo e(asset('images/logo_eventeesFix.svg')); ?>" alt="Eventees HUB Logo" class="hero-logo img-fluid">
                <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Penyedia Event JTI
                    Pertama <a href="#">EventeesHUB</a></p>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <a href="#eventees_1" class="btn btn-white btn-outline-white px-4 py-3">Mulai Event</a>
                </p>
            </div>
        </div>
    </div>
</div>

<section id="eventees_1" class="wrapper">
    <div class="intro-section text-center mb-5">
        <h2 class="eventees-title2">"{Wadah Edukasi Jembatan Prestasi}"</h2>
        <p class="eventees-text2">Jelajahi berbagai acara menarik yang kami tawarkan. Temukan kegiatan yang sesuai dengan
            minat
            Anda dan bergabunglah dengan kami dalam setiap momen spesial. Jangan lewatkan kesempatan untuk menjadi
            bagian
            dari pengalaman tak terlupakan!</p>
    </div>
    <div class="container">
        <div class="row">
            <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
            <?php endif; ?>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col"
                    onclick="navigateToEvent('<?php echo e(route('eventhub.show', ['kode_event' => $event->kode_event])); ?>')"
                    style="background-image:url('<?php echo e(asset('storage/event_photos/' . $event->photo)); ?>');">
                    <img class="card-img d-none" src="<?php echo e(asset('storage/' . $event->photo)); ?>"
                        alt="<?php echo e($event->nama_event); ?>">

                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2"><?php echo e($event->kode_event); ?></small>
                            <h4 class="card-title mt-0">
                                <a class="text-dark" href="#"><?php echo e($event->nama_event); ?></a>
                            </h4>
                            <h4 class="card-title mt-0">
                                <a class="text-dark" href="#">Rp.<?php echo e($event->harga); ?></a>
                            </h4>

                            <small><i class="far fa-clock"></i> <?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?></small>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                                <img class="mr-3 rounded-circle" src="<?php echo e(asset('images/eventeeslog1.png')); ?>" alt="Eventees Logo"
                                    style="max-width:100px">
                                <div class="media-body">
                                    <small><?php echo e($event->description); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<section class="ftco-section-3 img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch"
                    style="background-image: url(<?php echo e(asset('images/logo_eventeesFix.svg')); ?>);">
                </div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Kritik dan Saran</h3>

                <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>

                <?php if(Auth::check()): ?>
                <!-- Check if the user is authenticated -->
                <form id="feedback-form" action="<?php echo e(route('feedback.store')); ?>" method="POST" class="volunter-form">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required
                            value="<?php echo e(Auth::user()->name); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required
                            value="<?php echo e(Auth::user()->email); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                    </div>
                </form>
                <?php else: ?>
                <p>Anda harus <a href="<?php echo e(route('login')); ?>">login</a> untuk memberikan kritik dan saran.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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
        <?php if(!Auth::check()): ?>
            alert('Anda harus login terlebih dahulu untuk mengirim kritik dan saran.');
            window.location.href = "<?php echo e(route('login')); ?>";
        <?php else: ?>
            this.submit(); // Proceed with form submission
        <?php endif; ?>
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventhub.blade.php ENDPATH**/ ?>