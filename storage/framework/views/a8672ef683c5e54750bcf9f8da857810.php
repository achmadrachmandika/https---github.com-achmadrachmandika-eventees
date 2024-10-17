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
                    <label for="kode_dosen" class="form-label"><strong>Kode Dosen:</strong></label>
                    <select id="kode_dosen" name="kode_dosen" class="form-control" onchange="updateFields()">
                        <option value="">Pilih Kode Dosen</option>
                        <?php $__currentLoopData = $eventreqdosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($dosen->kode_dosen); ?>" data-training="<?php echo e($dosen->training_topic); ?>"
                            data-nohp="<?php echo e($dosen->no_hp); ?>">
                            <?php echo e($dosen->kode_dosen); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['kode_dosen'];
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
                    <label for="harga" class="form-label"><strong>Harga:</strong></label>
                    <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga"
                        value="<?php echo e(old('harga')); ?>" step="1" min="0" required>
                    <?php $__errorArgs = ['harga'];
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

                <div class="col-md-6 mb-3">
                    <label for="jam" class="form-label"><strong>Jam:</strong></label>
                    <input type="time" id="jam" name="jam" class="form-control" value="<?php echo e(old('jam')); ?>">
                    <?php $__errorArgs = ['jam'];
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

                <div class="col-md-12 mb-3">
                    <label for="benefits" class="form-label"><strong>Benefits:</strong></label>
                    <input type="text" id="benefits" name="benefits[]" class="form-control mb-2" placeholder="Benefit 1"
                        value="<?php echo e(old('benefits.0')); ?>">
                    <?php for($i = 1; $i <= 9; $i++): ?> <input type="text" id="benefits" name="benefits[]"
                        class="form-control mb-2" placeholder="Benefit <?php echo e($i+1); ?>" value="<?php echo e(old('benefits.' . $i)); ?>">
                        <?php endfor; ?>
                        <?php $__errorArgs = ['benefits'];
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

                <div class="col-2" style="height: 100%;">
                    <label for="kategori" class="required-star">Kategori</label>
                    <select class="form-control" name="kategori" id="kategori" style="height: 35px;">
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>
                </div>

                <div class="col-2" style="height: 100%;">
                    <label for="status" class="required-star">Status</label>
                    <select class="form-control" name="status" id="status" style="height: 35px;">
                        <option value="Paid">Paid</option>
                        <option value="Unpaid">Unpaid</option>
                    </select>
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

<?php $__env->startSection('scripts'); ?>
<script>
    function updateFields() {
        const kodeDosenSelect = document.getElementById('kode_dosen');
        const selectedOption = kodeDosenSelect.options[kodeDosenSelect.selectedIndex];

        const trainingTopicInput = document.getElementById('training_topic');
        const noHpInput = document.getElementById('no_hp');

        if (selectedOption.value) {
            trainingTopicInput.value = selectedOption.getAttribute('data-training');
            noHpInput.value = selectedOption.getAttribute('data-nohp');
        } else {
            trainingTopicInput.value = '';
            noHpInput.value = '';
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/events/create.blade.php ENDPATH**/ ?>