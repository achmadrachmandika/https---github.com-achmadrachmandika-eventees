



<?php $__env->startSection('content'); ?>
<style>
    .card {
        margin: 20px;
        padding: 20px;
    }
</style>

<div class="card">
    <div class="card-header">
        <h2 class="font-weight-bold">Detail Event Dosen</h2>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <strong>Kode Dosen:</strong>
            </div>
            <div class="col-md-8">
                <?php echo e($eventdosen->kode_dosen); ?>

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <strong>Nama Dosen:</strong>
            </div>
            <div class="col-md-8">
                <?php echo e($eventdosen->nama_dosen); ?>

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <strong>Topik Pelatihan:</strong>
            </div>
            <div class="col-md-8">
                <?php echo e($eventdosen->training_topic); ?>

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <strong>Nomor HP:</strong>
            </div>
            <div class="col-md-8">
                <?php echo e($eventdosen->no_hp); ?>

            </div>
        </div>
        <!-- Tambahkan detail lain yang ingin Anda tampilkan -->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo e(route('eventdosens.index')); ?>" class="btn btn-primary">Kembali ke Daftar Event Dosen</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventdosens/show.blade.php ENDPATH**/ ?>