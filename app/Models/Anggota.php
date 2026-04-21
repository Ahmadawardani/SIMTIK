<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'nrp',
        'nama_lengkap',
        'pangkat',
        'jabatan',
        'foto',
    ];
}
