<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'id_kelas',
        'alamat',
        'no_telp',
        'id_spp',
    ];

    public function spp() {
        return $this->belongsTo(Spp::class, 'id_spp', 'id_spp');
    }

    public function pembayaran() {
        return $this->hasMany(Pembayaran::class, 'id_spp', 'id_spp');
    }

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }
}
