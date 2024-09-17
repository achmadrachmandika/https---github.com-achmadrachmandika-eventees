

<?php $__env->startSection('content'); ?>
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-weight-bold">Daftar Event</h2>

            <div class="col-md-6 d-flex flex-row justify-content-end mb-3">
                <a class="btn btn-success" href="<?php echo e(route('events.create')); ?>">Masukkan Event</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Event</th>
                <th>Photo</th>
                <th>Nama Event</th>
                <th>Tanggal</th>
                
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($event->kode_event); ?></td>
                <?php if($event->photo): ?>
                <td>
                    <img src="<?php echo e(asset('storage/event_photos/' . $event->photo)); ?>" alt="<?php echo e($event->kode_event); ?>"
                        style="max-width: 100px; height: 100px; cursor: pointer;" data-toggle="modal" data-target="#imageModal"
                        data-image="<?php echo e(asset('storage/event_photos/' . $event->photo)); ?>"
                        data-title="<?php echo e($event->kode_event); ?>">
                </td>
                <?php else: ?>
                <td>Tidak Ada Foto</td>
                <?php endif; ?>
                <td><?php echo e($event->nama_event); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?></td>
                
                <td>
                    <form action="<?php echo e(route('events.destroy', $event->kode_event)); ?>" method="POST"
                        style="display: inline;">
                        <a class="btn btn-info" href="<?php echo e(route('events.show', $event->kode_event)); ?>">Show</a>
                        <a class="btn btn-primary" href="<?php echo e(route('events.edit', $event->kode_event)); ?>">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    
    
</div>

<script>
    $('#imageModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var imageUrl = button.data('image');
    var imageTitle = button.data('title');
    var modal = $(this);
    modal.find('.modal-body #modalImage').attr('src', imageUrl);
    modal.find('.modal-title').text(imageTitle);
    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project KWUJTI\KWUJti\resources\views/events/index.blade.php ENDPATH**/ ?>