{{-- 6.o --}}
@extends('layouts2.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        {{-- 6.p --}}
        <form action="{{route('admin.cpindex.cpupdate', $edit->id)}}" method="post" enctype="multipart/form-data">
            @csrf            
            <div class="form-group">
                <label for="id_jurusan">Jurusan</label>
                <select name="id_jurusan" id="id_jurusan" class="form-control" >
                    <option value="">--Pilih Jurusan--</option>
                    <option value="1" {{ $edit->id_jurusan == 1 ? 'selected' : '' }}>Operator Komputer</option>
                    <option value="2" {{ $edit->id_jurusan == 2 ? 'selected' : '' }}>Bahasa Inggris</option>
                    <option value="3" {{ $edit->id_jurusan == 3 ? 'selected' : '' }}>Desain Grafis</option>
                    <option value="4" {{ $edit->id_jurusan == 4 ? 'selected' : '' }}>Tata Boga</option>
                    <option value="5" {{ $edit->id_jurusan == 5 ? 'selected' : '' }}>Tata Busana</option>
                    <option value="6" {{ $edit->id_jurusan == 6 ? 'selected' : '' }}>Tata Graha</option>
                    <option value="7" {{ $edit->id_jurusan == 7 ? 'selected' : '' }}>Teknik Pendingin</option>
                    <option value="8" {{ $edit->id_jurusan == 8 ? 'selected' : '' }}>Teknik Komputer</option>
                    <option value="9" {{ $edit->id_jurusan == 9 ? 'selected' : '' }}>Otomotif Sepeda Motor</option>
                    <option value="10" {{ $edit->id_jurusan == 10 ? 'selected' : '' }}>Jaringan Komputer</option>
                    <option value="11" {{ $edit->id_jurusan == 11 ? 'selected' : '' }}>Barista</option>
                    <option value="12" {{ $edit->id_jurusan == 12 ? 'selected' : '' }}>Bahasa Korea</option>
                    <option value="13" {{ $edit->id_jurusan == 13 ? 'selected' : '' }}>Make Up Artist</option>
                    <option value="14" {{ $edit->id_jurusan == 14 ? 'selected' : '' }}>Video Editor</option>
                    <option value="15" {{ $edit->id_jurusan == 15 ? 'selected' : '' }}>Content Creator</option>
                    <option value="16" {{ $edit->id_jurusan == 16 ? 'selected' : '' }}>Web Programming</option>
                </select>
            </div>

            <div class="form-group">
                <label for="id_gelombang">Gelombang</label>
                <select name="id_gelombang" id="id_gelombang" class="form-control" >
                    <option value="">--Pilih Gelombang-</option>
                    <option value="1" {{$edit->id_gelombang == 1 ? 'selected' : ''}}>Gelombang 1</option>
                    <option value="2" {{$edit->id_gelombang == 2 ? 'selected' : ''}}>Gelombang 2</option>
                    <option value="3" {{$edit->id_gelombang == 3 ? 'selected' : ''}}>Gelombang 3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{$edit->nama_lengkap ?? ''}}" >
            </div>

            <div class="form-group">
                <label for="kartu_keluarga">Kartu Keluarga</label>
                <input type="hidden" name="kk_lama" value="{{$edit->kartu_keluarga ?? ''}}">
                <input type="file" class="form-control" id="kartu_keluarga" name="kartu_keluarga" accept=".pdf,.doc,.docx"  class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$edit->email ?? ''}}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" >
                    <option value="">--Pilih Status--</option>
                    <option value="0" {{ $edit->status == 0 ? 'selected' : '' }}>Belum Ada Status</option>
                    <option value="1" {{ $edit->status == 1 ? 'selected' : '' }}>Lolos</option>
                    <option value="2" {{ $edit->status == 2 ? 'selected' : '' }}>Tidak Lolos</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <input type="submit"  class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>

        </form>
    </div>
</div>
@endsection