<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demografi extends Model
{
    protected $fillable = ['id_demografi', 'tahun','nama_kecamatan', 'jumlah_penduduk'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "demografi";
    protected $primaryKey = 'id_demografi';
}

