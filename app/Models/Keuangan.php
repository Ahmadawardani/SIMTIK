<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $fillable = [
        'tanggal',
        'uraian_kegiatan',
        'jenis_belanja',
        'kode_mak',
        'nilai',
        'status',
        'keterangan',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'nilai' => 'decimal:2',
    ];
}
