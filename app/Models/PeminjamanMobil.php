<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanMobil extends Model
{
    use HasFactory;

    protected $table = 'peminjaman_mobil';
    protected $primaryKey = 'id';
    protected $fillable = ['id_user', 'id_mobil', 'tanggal_mulai', 'tanggal_selesai', 'durasi', 'biaya', 'status'];
}
