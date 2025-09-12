<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VrImage extends Model
{
    use HasFactory;
    protected $table = 'vr_images';
    protected $fillable = ['judul', 'deskripsi', 'gambar'];
}
