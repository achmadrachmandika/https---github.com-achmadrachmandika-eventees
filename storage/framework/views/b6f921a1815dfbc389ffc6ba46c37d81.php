<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Pending</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
        .full-bg {
            background-image: url('/img1/bg_1.jpg');
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
    <div class="container mt-5">
        <div class="alert alert-warning">
            <div class="text-center mb-4">
                <a href="#!">
                    <img src="<?php echo e(asset('images/logo_eventeesFix2.svg')); ?>" alt="EventeesHUB Logo" width="200" height="90"
                        class="mx-auto d-block">
                </a>
            </div>
            <h4 class="alert-heading">Pembayaran Pending</h4>
            <p>Pembayaran Anda sedang menunggu konfirmasi. Silakan cek kembali nanti untuk status akhir dari transaksi
                Anda.</p>
            <a href="<?php echo e(route('eventmhs')); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    </section>
</body>

</html><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/pembayaran/pending.blade.php ENDPATH**/ ?>