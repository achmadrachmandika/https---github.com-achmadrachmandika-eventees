<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Sukses</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-success">
            <h4 class="alert-heading">Pembayaran Berhasil!</h4>
            <p>Terima kasih atas pembayaran Anda. Transaksi Anda telah berhasil diproses.</p>
            <a href="{{ route('pembayaran.success') }}" class="btn btn-primary">Lihat Transaksi</a>
        </div>
        
    </div>
</body>

</html>