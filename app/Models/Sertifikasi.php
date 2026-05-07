<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sertifikasi extends Model
{
    protected $fillable = [
        'user_id',
        'nama_sertifikat',
        'lembaga_penerbit',
        'tanggal_terbit',
        'nomor_sertifikat',
        'file_sertifikat',
        'deskripsi',
        'tools',
        'kategori',
        'jurusan',
    ];
}