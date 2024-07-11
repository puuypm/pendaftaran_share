@extends('layouts2.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
            @csrf            
            <div class="form-group">
                <label for="id_jurusan">Jurusan</label>
                <select name="id_jurusan" id="id_jurusan" class="form-control" required>
                    <option value="">--Pilih Jurusan--</option>
                    <option value="1">Operator Komputer</option>
                    <option value="2">Bahasa Inggris</option>
                    <option value="3">Desain Grafis</option>
                    <option value="4">Tata Boga</option>
                    <option value="5">Tata Busana</option>
                    <option value="6">Tata Graha</option>
                    <option value="7">Teknik Pendingin</option>
                    <option value="8">Teknik Komputer</option>
                    <option value="9">Otomotif Sepeda Motor</option>
                    <option value="10">Jaringan Komputer</option>
                    <option value="11">Barista</option>
                    <option value="12">Bahasa Korea</option>
                    <option value="13">Make Up Artist</option>
                    <option value="14">Video Editor</option>
                    <option value="15">Content Creator</option>
                    <option value="16">Web Programming</option>
                </select>
            </div>

            <div class="form-group">
                <label for="id_gelombang">Gelombang</label>
                <select name="id_gelombang" id="id_gelombang" class="form-control" required>
                    <option value="">--Pilih Gelombang-</option>
                    <option value="1">Gelombang 1</option>
                    <option value="2">Gelombang 2</option>
                    <option value="3">Gelombang 3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="kartu_keluarga">Kartu Keluarga</label>
                <input type="file" class="form-control" id="kartu_keluarga" name="kartu_keluarga" accept=".pdf,.doc,.docx"  class="form-control">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control">
            </div>

            <div class="form-group">
                <label for="kejuruan">Kejuruan</label>
                <input type="text" name="kejuruan" id="kejuruan" class="form-control">
            </div>

            <div class="form-group">
                <label for="nomor_hp">Nomor HP</label>
                <input type="text" name="nomor_hp" id="nomor_hp" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="aktivitas_saat_ini">Aktivitas Saat Ini</label>
                <input type="text" name="aktivitas_saat_ini" id="aktivitas_saat_ini" class="form-control" required>
            </div>


                <input type="hidden" name="status" id="status" value="0">

            <div class="form-group mb-3">
                <input type="submit"  class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
