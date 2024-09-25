
<?php $__env->startSection('content'); ?>
<div class="container mt-4 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0">
                    <h2 class="text-center"><?php echo e($event->nama_event); ?></h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="<?php echo e(asset('storage/event_photos/' . $event->photo)); ?>" alt="<?php echo e($event->nama_event); ?>"
                            class="img-fluid">
                    </div>
                    <p><strong><?php echo e($event->kode_event); ?></strong> </p>
                    <p><strong>Tanggal:</strong> <?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?></p>
                    <p><strong>Deskripsi:</strong> <?php echo e($event->description); ?></p>
                
                    <?php if($event->benefits && count($event->benefits) > 0): ?>
                    <p><strong>Benefits:</strong></p>
                    <ul>
                        <?php $__currentLoopData = $event->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($benefit): ?>
                        <li><?php echo e($benefit); ?></li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                </div>
             <div class="card-footer bg-white border-0 d-flex justify-content-center">
                <a href="<?php echo e(route('eventhub')); ?>" class="btn btn-primary mx-2">Kembali ke Daftar Event</a>
                <a href="<?php echo e(route('eventhub')); ?>" class="btn btn-primary mx-2">Bayar</a>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventhubshow.blade.php ENDPATH**/ ?>