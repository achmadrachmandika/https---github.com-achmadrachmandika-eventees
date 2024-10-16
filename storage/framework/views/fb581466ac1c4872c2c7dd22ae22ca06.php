<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($event->nama_event); ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/styleshow.css')); ?>">
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <h2 class="font-weight-bold"><?php echo e($event->nama_event); ?></h2>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="<?php echo e(asset('storage/' . $event->photo)); ?>" alt="<?php echo e($event->nama_event); ?>"
                                class="img-fluid rounded mb-3">
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold">Kode Event: <span class="font-weight-normal"><?php echo e($event->kode_event); ?></span></p>
                            <p class="font-weight-bold">Tanggal: <span class="font-weight-normal"><?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?></span></p>
                            <p class="font-weight-bold">Deskripsi: <span class="font-weight-normal"><?php echo e($event->description); ?></span></p>
                                    <p class="font-weight-bold">Kategori: <span class="font-weight-normal"><?php echo e($event->kategori); ?></span></p>
                                            <p class="font-weight-bold">Status: <span class="font-weight-normal"><?php echo e($event->status); ?></span></p>
                            <p class="font-weight-bold">Harga: <span class="font-weight-normal">Rp. <?php echo e(number_format($event->harga, 0, ',', '.')); ?></span></p>
                        </div>

                        <?php if($event->benefits && count($event->benefits) > 0): ?>
                        <div class="mb-3">
                            <p class="font-weight-bold">Benefits:</p>
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $event->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($benefit): ?>
                                <li class="mb-2"><i class="fas fa-check-circle text-success"></i> <?php echo e($benefit); ?></li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="<?php echo e(route('eventhub')); ?>" class="btn btn-outline-primary">Kembali ke Daftar Event</a>
                        <button id="pay-button" class="btn btn-outline-primary">Bayar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="<?php echo e(env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-pe0su41EHxvjXTK9')); ?>"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            console.log('Pay button clicked'); // Debugging line
            
            // Make an AJAX call to create the transaction and get the snap token
            $.ajax({
                url: '<?php echo e(route('transactions.create')); ?>',
                method: 'POST',
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    kode_event: '<?php echo e($event->kode_event); ?>',
                    nama: '<?php echo e(Auth::user()->name); ?>',
                    email: '<?php echo e(Auth::user()->email); ?>',
                    nip: '<?php echo e(Auth::user()->nip); ?>'
                },
                success: function (data) {
                    console.log('Transaction created successfully:', data); // Debugging line
                    snap.pay(data.snap_token);
                },
                error: function (error) {
                    console.error('Error creating transaction:', error); // Debugging line
                }
            });
        };
    </script>
</body>

</html>
<?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventhubshow.blade.php ENDPATH**/ ?>