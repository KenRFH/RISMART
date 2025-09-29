<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VrImage extends Model
{
    use HasFactory;

    protected $table = 'vr_images';
    protected $fillable = ['judul', 'deskripsi', 'gambar', 'isActive'];
}
