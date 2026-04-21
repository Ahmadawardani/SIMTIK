<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = [
        'nomor_surat',
        'tanggal',
        'perihal',
        'jenis',
        'tipe',
        'dari_kepada',
        'file_surat',
        'keterangan',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
