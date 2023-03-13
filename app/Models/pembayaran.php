<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    protected $fillable = [
        'id_pembayaran',
        'id_petugas',
        'nama',
        'nis',
        'nisn',
        'spp_bulan',
        'tgl_bayar',
        'bulan_dibayar',
        'id_spp',
        'jumlah_bayar',
    ];

    public function spp() {
        return $this->belongsTo(Spp::class, 'id_spp', 'id_spp');
    }
}
