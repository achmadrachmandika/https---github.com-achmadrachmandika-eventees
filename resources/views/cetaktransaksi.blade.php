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
            @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->transaction_id }}</td>
                <td>{{ $transaction->kode_event }}</td>
                <td>{{ $transaction->order_id }}</td>
                <td>{{ $transaction->payment_type }}</td>
                <td>{{ $transaction->gross_amount }}</td>
                <td>{{ $transaction->transaction_status }}</td>
                <td>{{ \Carbon\Carbon::parse($transaction->date)->format('d M Y') }}</td>
                
     
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>