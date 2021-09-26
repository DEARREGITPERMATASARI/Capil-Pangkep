<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['id_produk', 'nama_produk','file_produk'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "produk";
    protected $primaryKey = 'id_produk';
}
