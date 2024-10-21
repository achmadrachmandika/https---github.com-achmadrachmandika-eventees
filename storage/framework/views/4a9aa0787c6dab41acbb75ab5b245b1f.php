

<?php $__env->startSection('content'); ?>
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2 class="font-weight-bold">Tambah Event Dosen</h2>
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
        <form action="<?php echo e(route('eventdosens.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="kode_evndsn" class="form-label">Kode Event Dosen</label>
                <input type="text" class="form-control" id="kode_evndsn" name="kode_evndsn" required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>

            <div class="mb-3">
                <label for="nama_event" class="form-label">Nama Event</label>
                <input type="text" class="form-control" id="nama_event" name="nama_event" required>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>

            <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="time" class="form-control" id="jam" name="jam" required>
            </div>

            <div class="mb-3">
                <label for="harga_dosen" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga_dosen" name="harga_dosen" required>
            </div>

            <div class="mb-3">
                <label for="kuota" class="form-label">Kuota</label>
                <input type="number" class="form-control" id="kuota" name="kuota" required>
            </div>

            <div class="mb-3">
                <label for="benefits" class="form-label">Benefits</label>
                <textarea class="form-control" id="benefits" name="benefits[]" rows="3"></textarea>
                <small class="form-text text-muted">Pisahkan dengan koma untuk beberapa benefits.</small>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan Event</button>
            <a href="<?php echo e(route('eventdosens.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventdosens/create.blade.php ENDPATH**/ ?>