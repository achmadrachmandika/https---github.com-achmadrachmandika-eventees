<!DOCTYPE html>
<html>

<head>
    <title>Laporan Transaksi</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Laporan Transaksi</h1>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Kode Event</th>
                <th>Order ID</th>
                <th>Jenis Pembayaran</th>
                <th>Jumlah</th>
                <th>Status Transaksi</th>
                <th>Tanggal</th>
      

            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($transaction->transaction_id); ?></td>
                <td><?php echo e($transaction->kode_event); ?></td>
                <td><?php echo e($transaction->order_id); ?></td>
                <td><?php echo e($transaction->payment_type); ?></td>
                <td><?php echo e($transaction->gross_amount); ?></td>
                <td><?php echo e($transaction->transaction_status); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($transaction->date)->format('d M Y')); ?></td>
                
     
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>

</html><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/cetaktransaksi.blade.php ENDPATH**/ ?>