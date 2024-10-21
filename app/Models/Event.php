<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_event';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_event',
        'kode_dosen',
        'photo',
        'nama_event',
        'harga',
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

    public function eventdosen()
    {
        return $this->belongsTo(Eventdosen::class, 'kode_dosen', 'kode_dosen');
    }
}
