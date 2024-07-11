<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //SELECT DISTINCT YEAR(participants.created_at) AS tahun_created FROM participants JOIN gelombangs ON participants.id_gelombang = gelombangs.id WHERE gelombangs.aktif = 1;
        $participants = Participant::whereHas('gelombang', function ($query) {
            $query->where('aktif', 0);
        })
        ->selectRaw('YEAR(created_at) as tahun_created')
        ->distinct()
        ->get();
        
        $title = 'Riwayat Participant';
        $desc = 'Data-data peserta akan ditampilkan per-tahun';
        
        return view('user.settings.index', compact('participants', 'title', 'desc'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $tahun_created)
    {
        // Ambil data jurusans
        $jurusans = DB::table('jurusans')->get();
    
        // Kirim variabel $tahun_created ke view
        return view('user.settings.show', compact('jurusans', 'tahun_created'));
    }
}
