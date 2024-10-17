<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventdosen extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_dosen';
     public $incrementing = false;
      protected $keyType = 'string';

      protected $fillable = [
        'kode_dosen',
        'training_topic',
         'nama_dosen',
        'no_hp',
        
    ];

}
