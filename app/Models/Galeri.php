<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['id_foto', 'nama_foto','foto'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "galeri";
    protected $primaryKey = 'id_foto';
}
