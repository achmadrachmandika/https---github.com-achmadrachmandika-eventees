

<?php $__env->startSection('content'); ?>
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2 class="font-weight-bold">Edit Event Dosen</h2>
    </div>
    
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="card-body">
        <form action="<?php echo e(route('eventdosens.update', $eventdosen->kode_evndsn)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="mb-3">
                <label for="kode_evndsn" class="form-label">Kode Event Dosen</label>
                <input type="text" class="form-control" id="kode_evndsn" name="kode_evndsn" value="<?php echo e($eventdosen->kode_evndsn); ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
                <?php if($eventdosen->photo): ?>
                    <img src="<?php echo e(asset('storage/' . $eventdosen->photo)); ?>" alt="Current Photo" style="max-width: 100px; height: 100px; margin-top: 10px;">
                <?php else: ?>
                    <p>Tidak Ada Foto</p>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="nama_event" class="form-label">Nama Event</label>
                <input type="text" class="form-control" id="nama_event" name="nama_event" value="<?php echo e($eventdosen->nama_event); ?>" required>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo e($eventdosen->tanggal); ?>" required>
            </div>

            <div class="mb-3">
                <label for="jam_mulai" class="form-label">jam_mulai</label>
                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" value="<?php echo e($eventdosen->jam_mulai); ?>" required>
            </div>

            <div class="mb-3">
                    <label for="jam_pulang" class="form-label">jam_pulang</label>
                    <input type="time" class="form-control" id="jam_pulang" name="jam_pulang" value="<?php echo e($eventdosen->jam_pulang); ?>"
                        required>
                </div>

            <div class="mb-3">
                <label for="kuota" class="form-label">Kuota</label>
                <input type="number" class="form-control" id="kuota" name="kuota" value="<?php echo e($eventdosen->kuota); ?>" required>
            </div>

            <div class="mb-3">
                <label for="benefits" class="form-label">Benefits</label>
                <textarea class="form-control" id="benefits" name="benefits[]" rows="3"><?php echo e(implode(', ', $eventdosen->benefits)); ?></textarea>
                <small class="form-text text-muted">Pisahkan dengan koma untuk beberapa benefits.</small>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="Online" <?php echo e($eventdosen->kategori == 'Online' ? 'selected' : ''); ?>>Online</option>
                    <option value="Offline" <?php echo e($eventdosen->kategori == 'Offline' ? 'selected' : ''); ?>>Offline</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status_pelatihan" class="form-label">Status</label>
                <select class="form-control" id="status_pelatihan" name="status_pelatihan" required>
                    <option value="pending" <?php echo e($eventdosen->status_pelatihan == 'pending' ? 'selected' : ''); ?>>Pending</option>
                    <option value="process" <?php echo e($eventdosen->status_pelatihan == 'process' ? 'selected' : ''); ?>>Process</option>
                    <option value="success" <?php echo e($eventdosen->status_pelatihan == 'success' ? 'selected' : ''); ?>>Success</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required><?php echo e($eventdosen->description); ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Event</button>
            <a href="<?php echo e(route('eventdosens.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventdosens/edit.blade.php ENDPATH**/ ?>