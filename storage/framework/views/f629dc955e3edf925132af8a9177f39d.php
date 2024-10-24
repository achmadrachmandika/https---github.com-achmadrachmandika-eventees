

<?php $__env->startSection('content'); ?>
<style>
    /* Tambahkan kelas CSS untuk judul tabel agar tetap pada posisi atas saat digulir */
    .sticky-header {
        position: sticky;
        top: 0;
        background-color: #444;
        /* Warna latar belakang judul tabel */
        z-index: 1;
        /* Pastikan judul tabel tetap di atas konten tabel */
    }

    /* Atur lebar kolom agar sesuai dengan konten di dalamnya */
    #myTable th {
        width: auto !important;
    }

    /* Atur tampilan tabel */
    .table-container {
        max-height: 400px;
        overflow-y: auto;
        margin-bottom: 20px;
    }
</style>

<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-weight-bold">Daftar Event Dosen</h2>
            <div class="col-md-6 d-flex flex-row justify-content-end mb-3">
                <input class="form-control me-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari.."
                    title="Type in a name">
                <a class="btn btn-success" href="<?php echo e(route('eventdosens.create')); ?>">Masukkan Event</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <div class="card-body">
        <div class="table-container">
            <table id="myTable" class="table table-striped mt-4" style="text-align: center;">
                <thead class="bg-secondary text-white text-center sticky-header">
                    <tr>
                        <th>Kode Event Dosen</th>
                        <th>Photo</th>
                        <th>Nama Event</th>
                        <th>Tanggal</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Kuota</th>
                        <th>Benefits</th>
                        <th>Kategori</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $eventdosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventdosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($eventdosen->kode_evndsn); ?></td>
                        <td>
                            <?php if($eventdosen->photo): ?>
                            <?php
                            $imagePath = asset('storage/' . $eventdosen->photo);
                            ?>
                            <img src="<?php echo e($imagePath); ?>" alt="<?php echo e($eventdosen->kode_evndsn); ?>"
                                style="max-width: 100px; height: 100px;">
                            <?php else: ?>
                            Tidak Ada Foto
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($eventdosen->nama_event); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($eventdosen->tanggal)->format('d-m-Y')); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($eventdosen->jam_mulai)->format('H:i:s')); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($eventdosen->jam_pulang)->format('H:i:s')); ?></td>
                        <td><?php echo e($eventdosen->kuota); ?></td>
                        <td>
                            <?php $__currentLoopData = $eventdosen->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div><?php echo e($benefit); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td><?php echo e($eventdosen->kategori); ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo e(route('eventdosens.show', $eventdosen->kode_evndsn)); ?>">Show</a>
                            <a class="btn btn-primary" href="<?php echo e(route('eventdosens.edit', $eventdosen->kode_evndsn)); ?>">Edit</a>
                            <form action="<?php echo e(route('eventdosens.destroy', $eventdosen->kode_evndsn)); ?>" method="POST"
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
    </div>
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

    function myFunction() {
        var input = document.getElementById("myInput");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("myTable");
        var tr = table.getElementsByTagName("tr");
        
        for (var i = 0; i < tr.length; i++) {
            // Lewati baris yang berisi <th> (header)
            if (tr[i].getElementsByTagName("th").length > 0) {
                continue;
            }
            
            var tds = tr[i].getElementsByTagName("td");
            var found = false;
            
            for (var j = 0; j < tds.length; j++) {
                if (tds[j].textContent.toUpperCase().indexOf(filter) > -1) {
                    found = true;
                    break; // Hentikan loop jika ditemukan kecocokan
                }
            }
            
            tr[i].style.display = found ? "" : "none";
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventdosens/index.blade.php ENDPATH**/ ?>