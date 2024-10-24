<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($eventdosen->nama_event); ?></title>
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

        .img-fluid.event-image {
            height: 120px;
            width: 120px;
            border: 2px solid #160404;
            border-radius: 25px;
            margin-left: 400px;
            margin-top: 20px;
        }

        .event-details {
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-top: -50px;
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
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <img src="<?php echo e(asset('storage/' . $eventdosen->photo)); ?>" alt="<?php echo e($eventdosen->nama_event); ?>"
                    class="img-fluid event-image">
                <div class="event-details">
                    <p class="font-weight-bold">Kode Event: <span class="font-weight-normal"><?php echo e($eventdosen->kode_evndsn); ?></span></p>
                    <p class="font-weight-bold">Tanggal: <span class="font-weight-normal"><?php echo e(\Carbon\Carbon::parse($eventdosen->tanggal)->format('d-m-Y')); ?></span></p>
                    <p class="font-weight-bold">Deskripsi: <span class="font-weight-normal"><?php echo e($eventdosen->description); ?></span></p>
                    <p class="font-weight-bold">Kategori: <span class="font-weight-normal"><?php echo e($eventdosen->kategori); ?></span></p>
                    <p class="font-weight-bold">Kuota: <span class="font-weight-normal"><?php echo e($eventdosen->kuota); ?></span>
                    </p>

                    <?php if($eventdosen->benefits && count($eventdosen->benefits) > 0): ?>
                    <div class="mb-3">
                        <p class="font-weight-bold">Benefits:</p>
                        <ul class="list-unstyled">
                            <?php $__currentLoopData = $eventdosen->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($benefit): ?>
                            <li><i class="fas fa-check-circle text-success"></i> <?php echo e($benefit); ?></li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="footer-buttons">
                    <a href="<?php echo e(auth()->user()->hasRole('dosen') ? route('eventhub') : route('eventmhs')); ?>"
                        class="btn btn-outline-secondary">
                        Kembali ke Daftar Event
                    </a>
                    <button id="interest-button" class="btn btn-primary">Tertarik</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('interest-button').addEventListener('click', function() {
                alert('Hubungi Nomor 083111963962 untuk mengkonfirmasi dengan menyertakan kode event yang ingin diambil');
            });
    </script>
</body>

</html><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/eventdosenshow.blade.php ENDPATH**/ ?>