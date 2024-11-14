<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($event->nama_event); ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/styleshow.css')); ?>">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .event-header {
            position: relative;
            height: 300px;
            background-color: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }

        .img-fluid.event-image { /* Use a period before each class name */
         height: 120px; /* Fixed height for the frame */
            width: 120px; /* Prevent repeating */
            border: 2px solid #e64a19; /* Example border */
            border-radius: 25px; /* Rounded corners (optional) */
            margin-left: 400px; /* Spacing to the left */
            margin-top: 20px; /* Add this line to move the image down */
        }

        .event-details {
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-top: -50px; /* Overlap with header */
        }

        .footer-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #ff5722;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e64a19;
        }

        .font-weight-bold {
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .footer-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .footer-buttons a,
            .footer-buttons button {
                margin-bottom: 10px;
            }
        }
    </style>
    <style>
        .full-bg {
            background-image: url('/images/Login-Bg.png');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <section class="full-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="event-details">
                    <p class="font-weight-bold">Kode Event: <span class="font-weight-normal"><?php echo e($event->kode_event); ?></span></p>
                    <p class="font-weight-bold">Nama Event: <span class="font-weight-normal"><?php echo e($event->nama_event); ?></span></p>
                    <p class="font-weight-bold">Tanggal: <span class="font-weight-normal"><?php echo e(\Carbon\Carbon::parse($event->tanggal)->format('d-m-Y')); ?></span></p>
                    <p class="font-weight-bold">Jam: <span class="font-weight-normal"><?php echo e(\Carbon\Carbon::parse($event->jam)->format('H:i:s')); ?></span></p>
                    <p class="font-weight-bold">Deskripsi: <span class="font-weight-normal"><?php echo e($event->description); ?></span></p>
                    <p class="font-weight-bold">Kategori: <span class="font-weight-normal"><?php echo e($event->kategori); ?></span></p>
                    <p class="font-weight-bold">Harga: <span class="font-weight-normal">Rp. <?php echo e(number_format($event->harga, 0, ',', '.')); ?></span></p>
                    <p class="font-weight-bold">Kuota: <span class="font-weight-normal"><?php echo e($event->kuota); ?></span></p>

                    <?php if($event->benefits && count($event->benefits) > 0): ?>
                    <div class="mb-3">
                        <p class="font-weight-bold">Benefits:</p>
                        <ul class="list-unstyled">
                            <?php $__currentLoopData = $event->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($benefit): ?>
                            <li><i class="fas fa-check-circle text-success"></i> <?php echo e($benefit); ?></li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="footer-buttons">
                    <a href="<?php echo e(auth()->user()->hasRole('mahasiswa') ? route('eventmhs') : route('eventhub')); ?>"
                        class="btn btn-outline-primary">
                        Kembali ke Daftar Event
                    </a>
                    <button id="pay-button" class="btn btn-primary">Bayar</button>
                </div>
            </div>
        </div>
    </div>
    </section>

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
                    snap.pay(data.snap_token, {
                        // Optional callback for result
                        onSuccess: function(result) {
                            console.log('Payment success:', result);
                            window.location.href = '<?php echo e(route('pembayaran.success')); ?>';
                        },
                        onPending: function(result) {
                            console.log('Payment pending:', result);
                            window.location.href = '<?php echo e(route('pembayaran.pending')); ?>';
                        },
                        onError: function(result) {
                            console.log('Payment error:', result);
                            // Optionally, handle the error and redirect or notify the user
                        },
                        onClose: function() {
                            console.log('Payment popup closed without finishing payment');
                            // Optionally, notify the user about the closure without payment
                        }
                    });
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