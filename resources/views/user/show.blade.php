@extends('layouts2.app')

@section('title', 'Detail Participant')

@section('content')
<div class="card card-round">
    <div class="card-header">
        Detail Participant
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Nama Lengkap:</strong> {{ $participant->nama_lengkap }}</p>
                <p><strong>NIK:</strong> {{ $participant->nik }}</p>
                <p><strong>Jenis Kelamin:</strong>{{$participant->jenis_kelamin}}</p>
                <p><strong>Tempat Lahir:</strong>{{$participant->tempat_lahir}}</p>
                <p><strong>Tanggal Lahir:</strong>{{$participant->tanggal_lahir}}</p>
                <p><strong>Pendidikan Terakhir:</strong>{{$participant->pendidikan_terakhir}}</p>
                <p><strong>Nama Sekolah:</strong>{{$participant->nama_sekolah}}</p>
                <p><strong>Kejuruan:</strong>{{$participant->kejuruan}}</p>
                <p><strong>Nomor Hp:</strong>{{$participant->nomor_hp}}</p>
                <p><strong>Email:</strong>{{$participant->email}}</p>
                {{-- <p><strong>Status:</strong>{{$participant->status}}</p> --}}
                <!-- Tambahkan informasi lain yang diperlukan -->
            </div>
            <div class="col-md-6">
                <p><strong>Status:</strong>{{($participant->status == 0)? 'Belum Ada Status':($participant->status == 1 ? 'Lolos':'Tidak Lolos')}}</p>
                <p><strong>Jurusan:</strong> {{ $participant->jurusan->nama_jurusan }}</p>
                @php
                $gelombang = ($participant->id_gelombang == 1) ? 'Gelombang 1' : (($participant->id_gelombang == 2) ? 'Gelombang 2' : 'Gelombang 3');
            @endphp
                <p><strong>Gelombang:</strong> {{ $gelombang }}</p>
                <p><strong>Aktivitas saat ini:</strong>{{$participant->aktivitas_saat_ini}}</p>
                <p><strong>Kartu Keluarga:</strong>
                    @if($participant->kartu_keluarga)
                        <a href="{{ asset('kartuKeluarga/' . $participant->kartu_keluarga) }}" target="_blank">
                            {{ $participant->kartu_keluarga }}
                        </a>
                    @else
                        <span> Belum ada file kartu keluarga</span>
                    @endif
                    </p>
                    
                <!-- Tambahkan informasi lain dari relasi -->
            </div>
        </div>
        <div class="row">
            <a href="{{url('user/index')}}" class="btn btn-danger">Kembali</a>
            <a href="{{route('user.edit', $participant->id)}}" class="btn btn-secondary">Edit Status</a>
        </div>
    </div>
</div>
@endsection
