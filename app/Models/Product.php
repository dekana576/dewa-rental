<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kendaraan',
        'foto_kendaraan',
        'merek_kendaraan',
        'jenis_kendaraan',
        'kapasitas_mesin',
        'tahun_produksi',
        'no_polisi',
        'no_mesin',
        'jumlah_kursi',
        'harga_sewa',
        'status',
        'deskripsi_kendaraan',
    ];
}
