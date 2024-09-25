
<?php $__env->startSection('content'); ?>
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0 text-center">
                    <h2 class="font-weight-bold"><?php echo e($event->nama_event); ?></h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="<?php echo e(asset('storage/' . $event->photo)); ?>" alt="<?php echo e($event->nama_event); ?>"
                            class="img-fluid rounded mb-3">
                    </div>
                    <div class="mb-3">
                        <p class="font-weight-bold">Kode Event: <span class="font-weight-normal"><?php echo e($event->kode_event); ?></span></p>
                        <p class="font-weight-bold">Tanggal: <span class="font-weight-normal"><?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?></span></p>
                        <p class="font-weight-bold">Deskripsi: <span class="font-weight-normal"><?php echo e($event->description); ?></span></p>
                        <p class="font-weight-bold">Harga: <span class="font-weight-normal">Rp. <?php echo e(number_format($event->harga, 0, ',', '.')); ?></span></p>
                    </div>

                    <?php if($event->benefits && count($event->benefits) > 0): ?>
                    <div class="mb-3">
                        <p class="font-weight-bold">Benefits:</p>
                        <ul class="list-unstyled">
                            <?php $__currentLoopData = $event->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($benefit): ?>
                            <li class="mb-2"><i class="fas fa-check-circle text-success"></i> <?php echo e($benefit); ?></li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="<?php echo e(route('eventhub')); ?>" class="btn btn-outline-primary">Kembali ke Daftar Event</a>
                    <a href="<?php echo e(route('eventhub')); ?>" class="btn btn-primary">Bayar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventhubshow.blade.php ENDPATH**/ ?>