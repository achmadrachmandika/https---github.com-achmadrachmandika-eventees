

<?php $__env->startSection('content'); ?>
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2 class="font-weight-bold">Detail Event Dosen</h2>
    </div>

    <div class="card-body">
        <h4 class="font-weight-bold">Kode Event Dosen:</h4>
        <p><?php echo e($eventdosen->kode_evndsn); ?></p>

        <h4 class="font-weight-bold">Nama Event:</h4>
        <p><?php echo e($eventdosen->nama_event); ?></p>

        <h4 class="font-weight-bold">Tanggal:</h4>
        <p><?php echo e(\Carbon\Carbon::parse($eventdosen->tanggal)->format('d M Y')); ?></p>

        <h4 class="font-weight-bold">Jam Mulai:</h4>
        <p><?php echo e(\Carbon\Carbon::parse($eventdosen->jam_mulai)->format('H:i')); ?></p>

        <h4 class="font-weight-bold">Jam Mulai:</h4>
        <p><?php echo e(\Carbon\Carbon::parse($eventdosen->jam_pulang)->format('H:i')); ?></p>

        <h4 class="font-weight-bold">Kuota:</h4>
        <p><?php echo e($eventdosen->kuota); ?></p>

        <h4 class="font-weight-bold">Benefits:</h4>
        <p><?php echo e(implode(', ', $eventdosen->benefits)); ?></p>

        <h4 class="font-weight-bold">Kategori:</h4>
        <p><?php echo e($eventdosen->kategori); ?></p>

        <h4 class="font-weight-bold">Deskripsi:</h4>
        <p><?php echo e($eventdosen->description); ?></p>

        <?php if($eventdosen->photo): ?>
        <h4 class="font-weight-bold">Photo:</h4>
        <img src="<?php echo e(asset('storage/' . $eventdosen->photo)); ?>" alt="Event Photo" class="img-fluid"
            style="border-radius: 10px; max-width: 300px;">
        <?php endif; ?>

        <div class="mt-4">
            <a href="<?php echo e(route('eventdosens.index')); ?>" class="btn btn-secondary">Kembali</a>
            <a href="<?php echo e(route('eventdosens.edit', $eventdosen->kode_evndsn)); ?>" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventdosens/show.blade.php ENDPATH**/ ?>