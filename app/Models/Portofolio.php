<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'user_id',
        'judul',
        'deskripsi',
        'link_github',
        'thumbnail',
        'kategori',
        'nilai',
        'jenis_porto',
        'tools',
        'teknologi',
    ];
}