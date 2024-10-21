<?php $__env->startSection('content'); ?>
<!-- Include Custom CSS -->
<link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">

<!-- Main Content -->
<div class="container-fluid">
    <div class="card" style="margin: 20px; padding: 20px;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="font-weight-bold">Dashboard</h2>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <!-- Card 1 -->
               <div class="col-md-6 col-xl-3 mb-4">
                <a href="<?php echo e(route('events.index')); ?>" class="card bg-c-blue order-card"
                    style="text-decoration: none; transition: transform 0.2s; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                    <div class="card-body">
                        <h6 class="m-b-20">Jumlah Event</h6>
                        <h2 class="text-right">
                            <i class="fa fa-credit-card f-left"></i>
                            <span><?php echo e($event->count()); ?></span>
                        </h2>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-3 mb-4">
                <a href="<?php echo e(route('eventreqdosens.index')); ?>" class="card bg-c-blue order-card"
                    style="text-decoration: none; transition: transform 0.2s; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                    <div class="card-body">
                        <h6 class="m-b-20">Jumlah Request Event Dosen</h6>
                        <h2 class="text-right">
                            <i class="fa fa-credit-card f-left"></i>
                            <span><?php echo e($eventreqdosen->count()); ?></span>
                        </h2>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-3 mb-4">
                <a href="<?php echo e(route('user.index')); ?>" class="card bg-c-blue order-card"
                    style="text-decoration: none; transition: transform 0.2s; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                    <div class="card-body">
                        <h6 class="m-b-20">Jumlah Pendaftar</h6>
                        <h2 class="text-right">
                            <i class="fa fa-credit-card f-left"></i>
                            <span><?php echo e($user->count()); ?></span>
                        </h2>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-3 mb-4">
                <a href="<?php echo e(route('feedback.index')); ?>" class="card bg-c-blue order-card"
                    style="text-decoration: none; transition: transform 0.2s; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                    <div class="card-body">
                        <h6 class="m-b-20">Jumlah Feedback</h6>
                        <h2 class="text-right">
                            <i class="fa fa-credit-card f-left"></i>
                            <span><?php echo e($feedbacks->count()); ?></span>
                        </h2>
                    </div>
                </a>
            </div>
    
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>