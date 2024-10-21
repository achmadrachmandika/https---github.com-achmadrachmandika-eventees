<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDosen extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_evndsn';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_evndsn',
        'photo',
        'nama_event',
        'harga_dosen',
        'kuota',
        'benefits',
        'tanggal',
        'status',
        'description',
        'jam',
        'kategori',
    ];

    // Ensure 'tanggal' is a Carbon instance
    protected $dates = ['tanggal'];
    protected $casts = [
        'benefits' => 'array',
    ];

    
}
