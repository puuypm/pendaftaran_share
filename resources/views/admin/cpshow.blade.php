{{-- 6.k --}}
@extends('layouts2.app')
@section('content')
<div class="card card-round">
    <div class="card-header">
        Detail Participant
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Nama Lengkap:</strong> {{ $participant->nama_lengkap }}</p>
               
              
              
              
              
               
               
               
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
            <a href="{{url('admin/cpindex')}}" class="btn btn-danger">Kembali</a>
            {{-- 6.L --}}
            <a href="{{route('admin.cpindex.cpedit', $participant->id)}}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
</div>
@endsection