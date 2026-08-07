<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    protected $fillable = [
        'nama',
        'instansi',
        'no_hp',
        'tujuan',
        'tanggal_kunjungan'
    ];
}
