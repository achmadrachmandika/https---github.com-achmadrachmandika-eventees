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
}
