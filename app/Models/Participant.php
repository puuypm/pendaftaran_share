<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_jurusan',
        'id_gelombang',
        'nama_lengkap',
        'nik',
        'kartu_keluarga',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan_terakhir',
        'nama_sekolah',
        'kejuruan',
        'nomor_hp',
        'email',
        'aktivitas_saat_ini',
        'status'
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
       
    }

    // buat user dibawah ini
    public function gelombang()
    {
        return $this->belongsTo(Gelombang::class, 'id_gelombang', 'id');
    }
}
