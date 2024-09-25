<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="card" style="padding: 20px;">
        <div class="card-header">
            <h2>Edit Event</h2>
        </div>

        <div class="card-body">
            
            <form action="<?php echo e(route('events.update', $event->kode_event)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="kode_event" class="form-label"><strong>Kode Event:</strong></label>
                        <input type="text" id="kode_event" name="kode_event" class="form-control"
                            placeholder="Kode Event" value="<?php echo e(old('kode_event', $event->kode_event)); ?>" readonly>
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
                        <?php if($event->photo): ?>
                        <img src="<?php echo e(asset('storage/event_photos/' . $event->photo)); ?>" alt="Current Photo"
                            style="max-width: 150px; height: auto; margin-top: 10px;">
                        <?php endif; ?>
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
                        <input type="text" id="nama_event" name="nama_event" class="form-control"
                            placeholder="Nama Event" value="<?php echo e(old('nama_event', $event->nama_event)); ?>">
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
                        <input type="date" id="tanggal" name="tanggal" class="form-control"
                            value="<?php echo e(old('tanggal', $event->tanggal)); ?>">
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
                            placeholder="Deskripsi"><?php echo e(old('description', $event->description)); ?></textarea>
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

                    <div class="col-md-12 mb-3">
                        <label for="benefits" class="form-label"><strong>Benefits:</strong></label>
                        <div id="benefits">
                            <?php $__currentLoopData = $event->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($benefit): ?>
                            <div class="input-group mb-2">
                                <input type="text" name="benefits[]" class="form-control" placeholder="Benefit"
                                    value="<?php echo e(old('benefits.' . $loop->index, $benefit)); ?>">
                                <button type="button" class="btn btn-danger"
                                    onclick="this.parentElement.remove()">X</button>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="addBenefit()">Add Benefit</button>
                    </div>

                    <div class="col-md-12 text-end">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a class="btn btn-primary ms-2" href="<?php echo e(route('events.index')); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function addBenefit() {
        const benefitsDiv = document.getElementById('benefits');
        const newBenefitDiv = document.createElement('div');
        newBenefitDiv.className = 'input-group mb-2';
        newBenefitDiv.innerHTML = `
            <input type="text" name="benefits[]" class="form-control" placeholder="Benefit">
            <button type="button" class="btn btn-danger" onclick="this.parentElement.remove()">X</button>
        `;
        benefitsDiv.appendChild(newBenefitDiv);
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/events/edit.blade.php ENDPATH**/ ?>