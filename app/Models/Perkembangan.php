<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkembangan extends Model
{
    protected $fillable = ['id_perkembangan', 'nama_perkembangan','file_perkembangan'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = "perkembangan";
    protected $primaryKey = 'id_perkembangan';
}
