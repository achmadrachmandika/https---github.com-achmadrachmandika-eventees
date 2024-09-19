
<link rel="stylesheet" href="<?php echo e(asset('css/styleeventhub.css')); ?>">
<?php $__env->startSection('content'); ?>

<div id="hero-wrap" style="background-color: #ffc800;" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax="properties: { translateY: '70%' }">
                <img src="<?php echo e(asset('images/eventeeslog1.png')); ?>" alt="Eventees HUB Logo" class="hero-logo img-fluid">
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
    <div class="intro-section text-center mb-5">
        <h2 class="intro-title1">"{Mau Jago IT ?}"</h2>
        <p class="intro-text1">Jelajahi berbagai acara menarik yang kami tawarkan. Temukan kegiatan yang sesuai dengan minat
            Anda dan bergabunglah dengan kami dalam setiap momen spesial. Jangan lewatkan kesempatan untuk menjadi bagian
            dari pengalaman tak terlupakan!</p>
    </div>
   <div class="container">
    <div class="row">
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-dark card-has-bg click-col" data-event-name="<?php echo e($event->nama_event); ?>"
                data-event-date="<?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?>"
                data-event-description="<?php echo e($event->description); ?>" data-event-kode="<?php echo e($event->kode_event); ?>"
                style="background-image:url('<?php echo e(asset('storage/event_photos/' . $event->photo)); ?>');">

                <img class="card-img d-none" src="<?php echo e(asset('storage/event_photos/' . $event->photo)); ?>"
                    alt="<?php echo e($event->nama_event); ?>">

                <div class="card-img-overlay d-flex flex-column">
                    <div class="card-body">
                        <small class="card-meta mb-2"><?php echo e($event->kode_event); ?></small>
                        <h4 class="card-title mt-0">
                            <a class="text-dark" href="#"><?php echo e($event->nama_event); ?></a>
                        </h4>

                        <small><i class="far fa-clock"></i> <?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?></small>
                    </div>
                    <div class="card-footer">
                        <div class="media">
                            <img class="mr-3 rounded-circle"
                                src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                                alt="Generic placeholder image" style="max-width:50px">
                            <div class="media-body">
                                <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
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

    <!-- Modal -->
    <!-- Modal -->
   <!-- Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEventTitle">Event Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Modal content will be injected here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-section-3 img" style="background-image: url(<?php echo e(asset('images/bg_3.jpg')); ?>);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch"
                    style="background-image: url(<?php echo e(asset('images/bg_4.jpg')); ?>);">
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
    $(document).ready(function() {
    $('.card').on('click', function() {
        // Ambil data dari card yang diklik
        var eventName = $(this).data('event-name');
        var eventDate = $(this).data('event-date');
        var eventDescription = $(this).data('event-description');
        var eventKode = $(this).data('event-kode'); // Ambil kode event
        
        // Isi modal dengan data
        var modalBody = `
            <h4>${eventName}</h4>
            <p><strong>Date:</strong> ${eventDate}</p>
            <p><strong>Description:</strong> ${eventDescription}</p>
        `;
        
        $('#eventModal .modal-body').html(modalBody);
        
        // Atur judul modal dengan nama event atau kode event
        $('#modalEventTitle').text(eventName); // Ganti dengan nama event atau kode event
        
        // Tampilkan modal
        $('#eventModal').modal('show');
    });
});

// Fungsi untuk menutup modal
function closeModal() {
    $('#eventModal').modal('hide');
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project KWUJTI\KWUJti\resources\views/eventhub.blade.php ENDPATH**/ ?>