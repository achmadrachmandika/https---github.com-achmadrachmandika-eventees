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

    <div style="max-height:550px;overflow-y:auto; margin-bottom: 10px">
        <table id="myTable" class="table table-striped mt-4" style="text-align: center;">
            <thead class="bg-secondary text-white text-center sticky-header">
            <tr>
                <th>Kode Event</th>
                <th>Photo</th>
                <th>Nama Event</th>
                <th>Tanggal</th>
                <th>Harga</th>
                <th>Benefits</th> <!-- New column for benefits -->
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($event->kode_event); ?></td>
                <td>
                    <?php if($event->photo): ?>
                    <?php
                    $imagePath = asset('storage/' . $event->photo);
                    ?>
                    <img src="<?php echo e($imagePath); ?>" alt="<?php echo e($event->kode_event); ?>"
                        style="max-width: 100px; height: 100px;">
                    <?php else: ?>
                    Tidak Ada Foto
                    <?php endif; ?>
                </td>
                <td><?php echo e($event->nama_event); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?></td>
                <td><?php echo e($event->harga); ?></td>
                <td>
                    <?php $__currentLoopData = $event->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><?php echo e($benefit); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                    <a class="btn btn-info" href="<?php echo e(route('events.show', $event->kode_event)); ?>">Show</a>
                    <a class="btn btn-primary" href="<?php echo e(route('events.edit', $event->kode_event)); ?>">Edit</a>
                    <form action="<?php echo e(route('events.destroy', $event->kode_event)); ?>" method="POST"
                        style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-outline-danger"
                            onclick="return confirmDelete()">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>

    <!-- Modal -->

    
    
</div>

<script>

    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus Event ini?');
    }

    // Menambahkan timestamp untuk cache busting gambar
    window.onload = function() {
        var images = document.getElementsByTagName('img');
        for (var i = 0; i < images.length; i++) {
            images[i].src = images[i].src + '?' + new Date().getTime();
        }
    }
</script>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/events/index.blade.php ENDPATH**/ ?>