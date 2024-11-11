<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'kode_event',
        'kode_evndsn', // Tambahkan kolom ini
        'order_id',
        'payment_type',
        'gross_amount',
        'transaction_status',
        'transaction_details',
    ];

    protected $casts = [
        'transaction_details' => 'array',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'kode_event', 'kode_event');
    }

    public function eventDosen()
    {
        return $this->belongsTo(EventDosen::class, 'kode_evndsn', 'kode_evndsn'); // Relasi ke EventDosen
    }

    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
}
