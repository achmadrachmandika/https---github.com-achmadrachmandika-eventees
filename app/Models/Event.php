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
        'photo',
        'nama_event',
        'benefits', // Updated to reflect JSON column
        'tanggal',
        'description',
    ];

    // Ensure 'tanggal' is a Carbon instance
    protected $dates = ['tanggal'];
     protected $casts = [
        'benefits' => 'array',
    ];

}
