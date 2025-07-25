<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nama_proyek',
        'kategori',
        'tanggal_pembuatan',
        'link',
        'deskripsi',
    ];
}
