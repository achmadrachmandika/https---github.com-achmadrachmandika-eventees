

<?php $__env->startSection('content'); ?>
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2 class="font-weight-bold"><?php echo e($event->nama_event); ?></h2>
    </div>

    <div class="card-body">
        <div class="mb-3">
            <strong>Kode Event:</strong> <?php echo e($event->kode_event); ?>

        </div>

        <div class="mb-3">
            <strong>Photo:</strong>
            <?php if($event->photo): ?>
            <img src="<?php echo e(asset('storage/' . $event->photo)); ?>" alt="<?php echo e($event->kode_event); ?>"
                style="max-width: 300px; height: auto;">
            <?php else: ?>
            <p>Tidak Ada Foto</p>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <strong>Harga:</strong> <?php echo e($event->harga); ?>

        </div>

        <div class="mb-3">
            <strong>Tanggal:</strong> <?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?>

        </div>

        <div class="mb-3">
            <strong>Deskripsi:</strong>
            <p><?php echo e($event->description); ?></p>
        </div>

        <div class="mb-3">
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
    </div>

    <div class="card-footer">
        <a class="btn btn-primary" href="<?php echo e(route('events.index')); ?>">Kembali ke Daftar Event</a>
        <a class="btn btn-warning" href="<?php echo e(route('events.edit', $event->kode_event)); ?>">Edit</a>
        <form action="<?php echo e(route('events.destroy', $event->kode_event)); ?>" method="POST" style="display:inline;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-outline-danger" onclick="return confirmDelete()">Hapus</button>
        </form>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus Event ini?');
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/events/show.blade.php ENDPATH**/ ?>