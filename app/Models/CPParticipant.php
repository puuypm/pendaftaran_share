<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPParticipant extends Model
{
    use HasFactory;
    //6.F  
    protected $fillable = [
        'id_jurusan',
        'id_gelombang',
        'nama_lengkap',
        'kartu_keluarga',
        'email',
        'status'
    ];
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
       
    }
}
