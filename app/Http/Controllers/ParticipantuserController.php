<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //SELECT * FROM `participants` join gelombangs on participants.id_gelombang = gelombangs.id WHERE gelombangs.aktif = 1
        $participants = Participant::whereHas('gelombang', function ($query) {
            $query->where('aktif', 1);
        })->get();
        $title = "Data Participant";

        return view('user.index', compact('participants', 'title'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $participant = Participant::with('jurusan')->findOrFail($id);

        return view('user.show', compact('participant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $edit = Participant::find($id);
        $title = "Edit Data " . $edit->nama_lengkap;
        return view('user.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         // Temukan participant berdasarkan ID
        $participant = Participant::find($id);

        if (!$participant) {
            return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan']);
        }

        // Update hanya status peserta
        $participant->status = $request->status;

        // Simpan perubahan
        $participant->save();

        return redirect()->to('user/index')->with('message', 'Status peserta berhasil diubah');
    }
}
