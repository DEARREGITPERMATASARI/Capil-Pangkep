<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    protected $fillable = ['id_penghargaan', 'nama_penghargaan', 'deskripsi_penghargaan', 'tahun'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "penghargaan";
    protected $primaryKey = 'id_penghargaan';
}
