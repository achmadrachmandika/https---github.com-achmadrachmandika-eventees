

<?php $__env->startSection('content'); ?>
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2>Tambah Event Baru</h2>
    </div>

    <div class="card-body">
        
        <form action="<?php echo e(route('events.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="kode_event" class="form-label"><strong>Kode Event:</strong></label>
                    <input type="text" id="kode_event" name="kode_event" class="form-control" placeholder="Kode Event"
                        value="<?php echo e(old('kode_event')); ?>">
                    <?php $__errorArgs = ['kode_event'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="photo" class="form-label"><strong>Photo:</strong></label>
                    <input type="file" id="photo" name="photo" class="form-control">
                    <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="nama_event" class="form-label"><strong>Nama Event:</strong></label>
                    <input type="text" id="nama_event" name="nama_event" class="form-control" placeholder="Nama Event"
                        value="<?php echo e(old('nama_event')); ?>">
                    <?php $__errorArgs = ['nama_event'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="tanggal" class="form-label"><strong>Tanggal:</strong></label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?php echo e(old('tanggal')); ?>">
                    <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label"><strong>Deskripsi:</strong></label>
                    <textarea id="description" class="form-control" name="description" rows="4"
                        placeholder="Deskripsi"><?php echo e(old('description')); ?></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-md-12 text-end">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a class="btn btn-primary ms-2" href="<?php echo e(route('events.index')); ?>">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project KWUJTI\KWUJti\resources\views/events/create.blade.php ENDPATH**/ ?>