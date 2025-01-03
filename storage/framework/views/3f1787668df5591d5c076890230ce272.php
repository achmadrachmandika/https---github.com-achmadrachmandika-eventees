

<?php $__env->startSection('content'); ?>
<style>
    .sticky-header {
        position: sticky;
        top: 0;
        background-color: #444;
        z-index: 1;
    }

    #myTable th {
        width: auto !important;
    }

    .table-container {
        max-height: 400px;
        overflow-y: auto;
        margin-bottom: 20px;
    }
</style>

<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-weight-bold">Daftar Event</h2>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <div class="card-body">
        <div class="table-container">
            <table id="myTable1" class="table table-striped mt-4" style="text-align: center;">
                <thead class="bg-secondary text-white text-center sticky-header">
                    <tr>
                        <th>Kode Event Dosen</th>
                        <th>Nama Dosen</th>
                        <th>Topik Pelatihan</th>
                        <th>Nomor HP</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $eventreqdosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventreqdosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($eventreqdosen->kode_dosen); ?></td>
                        <td><?php echo e($eventreqdosen->nama_dosen); ?></td>
                        <td><?php echo e($eventreqdosen->training_topic); ?></td>
                        <td><?php echo e($eventreqdosen->no_hp); ?></td>
                        <td>
                            <?php if($eventreqdosen->status == 'Proses'): ?>
                            <button class="btn btn-danger"><?php echo e($eventreqdosen->status); ?></button>
                            <?php elseif($eventreqdosen->status == 'Terealisasi'): ?>
                            <button class="btn btn-success"><?php echo e($eventreqdosen->status); ?></button>
                            <?php else: ?>
                            <button class="btn btn-secondary"><?php echo e($eventreqdosen->status); ?></button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a class="btn btn-info"
                                href="<?php echo e(route('eventreqdosens.show', $eventreqdosen->kode_dosen)); ?>">Show</a>
                            <form action="<?php echo e(route('eventreqdosens.destroy', $eventreqdosen->kode_dosen)); ?>"
                                method="POST" style="display:inline-block;"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    
    <!-- JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable1');
    </script>

<script>
    window.onload = function() {
        var images = document.getElementsByTagName('img');
        for (var i = 0; i < images.length; i++) {
            images[i].src = images[i].src + '?' + new Date().getTime();
        }
    }

    function myFunction() {
        var input = document.getElementById("myInput");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("myTable");
        var tr = table.getElementsByTagName("tr");
        
        for (var i = 0; i < tr.length; i++) {
            if (tr[i].getElementsByTagName("th").length > 0) {
                continue;
            }
            
            var tds = tr[i].getElementsByTagName("td");
            var found = false;
            
            for (var j = 0; j < tds.length; j++) {
                if (tds[j].textContent.toUpperCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
            
            tr[i].style.display = found ? "" : "none";
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventreqdosens/index.blade.php ENDPATH**/ ?>