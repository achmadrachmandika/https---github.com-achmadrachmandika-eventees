<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Event;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;

class TransactionController extends Controller
{
        public function index()
    {
        $transactions = Transaction::all();
        return view('transaction.index', compact('transactions')); // Memisahkan kedua variabel dengan koma
    }
    public function __construct()
    {
        // Set your Merchant Server Key
        Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;
    }

    public function createTransaction(Request $request)
{
    $request->validate([
        'kode_event' => 'required|exists:events,kode_event',
        'nama' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'nip' => 'required|string|max:15',
    ]);

    $event = Event::where('kode_event', $request->kode_event)->firstOrFail();

    // Periksa apakah kuota tersedia
    if ($event->kuota <= 0) {
        return response()->json(['error' => 'Kuota tidak tersedia.'], 400);
    }

    // Kurangi kuota
    $event->kuota--;
    $event->save();

    $orderId = uniqid();

    $params = [
        'transaction_details' => [
            'order_id' => $orderId,
            'gross_amount' => $event->harga,
        ],
        'customer_details' => [
            'first_name' => $request->nama,
            'email' => $request->email,
            'phone' => $request->nip,  // Using nip as phone number for Midtrans
        ],
        'item_details' => [
            [
                'id' => $event->kode_event,
                'price' => $event->harga,
                'quantity' => 1,
                'name' => $event->nama_event,
            ],
        ],
    ];

    try {
        $snapToken = Snap::getSnapToken($params);

        Transaction::create([
            'transaction_id' => $orderId,
            'kode_event' => $event->kode_event,
            'order_id' => $orderId,
            'payment_type' => 'pending',
            'gross_amount' => $event->harga,
            'transaction_status' => 'pending',
            'transaction_details' => json_encode($params),
        ]);

        return response()->json(['snap_token' => $snapToken], 201);
    } catch (\Exception $e) {
        // Jika terjadi kesalahan, kembalikan kuota yang sudah dikurangi
        $event->kuota++; // Rollback kuota
        $event->save();

        return response()->json(['error' => $e->getMessage()], 500);
    }
}


     public function notificationHandler(Request $request)
    {
        $notification = new Notification();

        // Cari transaksi berdasarkan order_id yang diterima
        $transaction = Transaction::where('order_id', $notification->order_id)->firstOrFail();

        // Perbarui informasi status transaksi
        $transaction->update([
            'payment_type' => $notification->payment_type,
            'transaction_status' => $notification->transaction_status,
            'transaction_details' => json_encode($notification),
        ]);

        // Jika transaksi berhasil (settlement), lakukan hal berikut:
        if ($notification->transaction_status == 'settlement') {
            $transaction->transaction_status = 'success'; // Ganti status ke success
            $transaction->save();

            // Update event status menjadi 'Paid'
            $event = Event::where('kode_event', $transaction->kode_event)->first();
            $event->status = 'Paid';
            $event->save();
        }

        return response()->json(['status' => 'success'], 200);
    }


}
