<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PembayaranController extends Controller
{
    // Method untuk menerima callback dari Midtrans
    public function callback(Request $request)
    {
        // Verifikasi signature untuk memastikan keamanan
        $signature_key = config('midtrans.server_key');
        $status = $request->input('transaction_status');
        $order_id = $request->input('order_id');

        // Update status pembayaran di database Anda
        // Misalnya, Anda memiliki model Payment yang terkait dengan transaksi
        $payment = Payment::where('order_id', $order_id)->first();
        
        if ($payment) {
            if ($status == 'success') {
                $payment->status = 'success'; // Atur status menjadi success
            } elseif ($status == 'pending') {
                $payment->status = 'pending'; // Atur status menjadi pending
            } elseif ($status == 'failed') {
                $payment->status = 'failed'; // Atur status menjadi failed
            }
            $payment->save();
        }

        // Redirect ke halaman sukses
        return redirect()->route('pembayaran.success'); // Rute ke halaman sukses
    }

    public function success()
    {
        return view('pembayaran.success');
    }

    // Method untuk halaman pending
    public function pending()
    {
        return view('pembayaran.pending');
    }
}
