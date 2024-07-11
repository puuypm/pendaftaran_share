<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $idJurusan, string $tahun)
    {
        // Validasi idJurusan yang diberikan
        $jurusan = Jurusan::find($idJurusan);
        if (!$jurusan) {
            return redirect()->back()->with('error', 'Jurusan tidak ditemukan');
        }
    
        // Mengambil data participants yang tidak aktif berdasarkan jurusan dengan pagination
        $participants = Participant::join('jurusans', 'participants.id_jurusan', '=', 'jurusans.id')
            ->join('gelombangs', 'participants.id_gelombang', '=', 'gelombangs.id')
            ->where('gelombangs.aktif', 0)
            ->where('participants.id_jurusan', $idJurusan)
            ->whereYear('participants.created_at', $tahun)
            ->select('participants.*', 'jurusans.nama_jurusan', 'gelombangs.nama_gelombang') // Tambahkan kolom lain jika diperlukan
            ->paginate(10); // Ganti dengan jumlah item per halaman yang diinginkan
    
        return view('user.settings.riwayat.index', compact('participants'));
    }

//     public function index(string $idJurusan, string $tahun)
// {
//     // Validasi idJurusan yang diberikan
//     $jurusan = DB::table('jurusans')->where('id', $idJurusan)->first();
//     if (!$jurusan) {
//         return redirect()->back()->with('error', 'Jurusan tidak ditemukan');
//     }

//     // Mengambil data participants yang tidak aktif berdasarkan jurusan dengan pagination
//     $participants = DB::table('participants')
//         ->join('jurusans', 'participants.id_jurusan', '=', 'jurusans.id')
//         ->join('gelombangs', 'participants.id_gelombang', '=', 'gelombangs.id')
//         ->where('gelombangs.aktif', 0)
//         ->where('participants.id_jurusan', $idJurusan)
//         ->whereYear('participants.created_at', $tahun)
//         ->select('participants.*', 'jurusans.nama_jurusan', 'gelombangs.nama_gelombang') // Tambahkan kolom lain jika diperlukan
//         ->paginate(10); // Ganti dengan jumlah item per halaman yang diinginkan

//     return view('user.settings.riwayat.index', compact('participants'));
// }
}
