<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CPParticipant;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class CPParticipantController extends Controller
{

    public function index()
    //6. G. 1
    {
        $participants = CPParticipant::with('jurusan')->get();
        $title = "Data Participant";

        //3. buat  return view('admin.cpindex'); lalu buat file cpindex.blade.php di folder admin
        return view('admin.cpindex', compact('participants', 'title'));
    }

    // 5.
    public function create()
    {
        //
        $title = "Add Participant";
        return view('admin.cpcreate', compact('title'));
    }


    public function store(Request $request)
    {
        //6. E
        $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('c_p_participants', 'email') // Memastikan email adalah unik di tabel participants
            ],
            'kartu_keluarga' => 'required|file|mimes:pdf,doc,docx|max:10000',
            // Tambahkan validasi lainnya sesuai kebutuhan Anda
        ]);
    
        // Proses penyimpanan file kartu keluarga
        $kk = $request->file('kartu_keluarga');
        $kkCustom = time() . "_" . $kk->getClientOriginalName();
        $path = 'kartuKeluarga';
        $kk->move($path, $kkCustom);
        
        // Simpan data participant setelah validasi sukses
        CPParticipant::create([
            'id_jurusan' => $request->id_jurusan,
            'id_gelombang' => $request->id_gelombang,
            'nama_lengkap' => $request->nama_lengkap,
            'kartu_keluarga' => $kkCustom,
            'email' => $request->email,
            'status' => $request->status
         ]);
    
         return redirect()->to('admin/cpindex')->with('message', 'Data berhasil ditambah');
    }


    public function show(string $id)
    {
        //6.j
        $participant = CPParticipant::with('jurusan')->findOrFail($id);

        return view('admin.cpshow', compact('participant'));

    }


    public function edit(string $id)
    {
        //6.n
        $edit = CPParticipant::find($id);
        $title = "Edit Data " . $edit->nama_lengkap;
        return view('admin.cpedit', compact('edit', 'title'));

    }

    private function uploadFile($fileInputName, $destinationDir)
    {
        // Ensure directory exists (improved error handling)
        $publicPath = public_path($destinationDir);
        if (!is_dir($publicPath)) {
            if (!mkdir($publicPath, 0777, true)) {
                return false; // Report error if mkdir fails
            }
        }
    
        // Check if file was uploaded
        if (!request()->hasFile($fileInputName)) {
            return false;
        }
    
        $file = request()->file($fileInputName);
    
        // Validate file
        if (!$file->isValid()) {
            return false;
        }
    
        // Validate file extension
        $validExtensions = ['pdf', 'doc', 'docx'];
        $extension = $file->getClientOriginalExtension();
        if (!in_array($extension, $validExtensions)) {
            return false;
        }
    
        // Validate file size (10MB)
        $maxSize = 10000000; // 10MB
        if ($file->getSize() > $maxSize) {
            return false;
        }
    
        // Generate unique file name
        $fileName = time() . '_' . $file->getClientOriginalName();
    
        // Move uploaded file to destination directory
        if ($file->move($publicPath, $fileName)) {
            return $fileName;
        } else {
            return false;
        }
    }

    public function update(Request $request, string $id)
    {
        //6.r
            // Temukan participant berdasarkan ID
            $participant = CPParticipant::find($id);

            if (!$participant) {
                return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan']);
            }
    
            // Validasi request
            $request->validate([
                'email' => [
                    'required',
                    'email',
                    Rule::unique('c_p_participants', 'email')->ignore($participant->id) // Memastikan email adalah unik kecuali untuk participant saat ini
                ],
                'kartu_keluarga' => 'nullable|file|mimes:pdf,doc,docx|max:10000',
                // Tambahkan validasi lainnya sesuai kebutuhan Anda
            ]);
    
            // Cek apakah ada file kartu_keluarga yang diupload baru
            if ($request->hasFile('kartu_keluarga')) {
                // Validasi file baru
                $validatedData = $request->validate([
                    'kartu_keluarga' => 'required|file|mimes:pdf,doc,docx|max:10000',
                ]);
    
                // Hapus file lama jika ada
                $oldFileName = $request->input('kk_lama');
                if ($oldFileName && file_exists(public_path('kartuKeluarga/' . $oldFileName))) {
                    unlink(public_path('kartuKeluarga/' . $oldFileName));
                }
    
                // Upload file baru
                $newFileName = $this->uploadFile('kartu_keluarga', 'kartuKeluarga');
    
                if (!$newFileName) {
                    return redirect()->back()->withErrors(['message' => 'Gagal mengunggah file kartu keluarga.']);
                }
    
                // Simpan nama file baru ke dalam model
                $participant->kartu_keluarga = $newFileName;
            }
    
            // Update data peserta
            $participant->id_jurusan = $request->id_jurusan;
            $participant->id_gelombang = $request->id_gelombang;
            $participant->nama_lengkap = $request->nama_lengkap;
            $participant->email = $request->email;
            $participant->status = $request->status;
    
            // Simpan perubahan
            $participant->save();
    
            return redirect()->to('admin/cpindex')->with('message', 'Data berhasil diubah');
    }


    public function destroy(string $id)
    {
        //6.u
                 // Temukan participant berdasarkan ID
                 $participant = CPParticipant::find($id);
     
                 if (!$participant) {
                     return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan']);
                 }
             
                 // Hapus file kartu keluarga dari direktori public/kartuKeluarga menggunakan unlink
                 $fileName = $participant->kartu_keluarga;
             
                 if ($fileName) {
                     $filePath = public_path('kartuKeluarga/' . $fileName);
             
                     // Hapus file dari direktori public
                     if (file_exists($filePath)) {
                         unlink($filePath);
                     } else {
                         Log::error("File '$fileName' tidak ditemukan saat mencoba untuk dihapus.");
                     }
                 }
             
                 // Hapus baris dari tabel participants
                 $participant->delete();
             
                 return redirect()->to('admin/cpindex')->with('message', 'Data berhasil dihapus');

    }
}
