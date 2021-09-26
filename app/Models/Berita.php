<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['id_berita', 'judul','deskripsi'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "berita";
    protected $primaryKey = 'id_berita';
}
