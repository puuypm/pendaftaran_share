@extends('layouts2.app')

@section('title', 'Riwayat Participant')

@section('content')
<div class="card card-round">
    <div class="card-header">
        Data Participant per-Jurusan yang tidak aktif
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Nama Jurusan</th>
                            <th>Nama Gelombang</th>
                            <!-- Tambahkan kolom lain jika diperlukan -->
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($participants as $participant)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $participant->nama_lengkap }}</td>
                            <td>{{ $participant->nik }}</td>
                            <td>{{ $participant->jenis_kelamin }}</td>
                            <td>{{ $participant->email }}</td>
                            <td>{{ $participant->nama_jurusan }}</td>
                            <td>{{ $participant->nama_gelombang }}</td>
                            <!-- Tambahkan data lain jika diperlukan -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination Links -->
                {{ $participants->links() }}
            </div>
        </div>
        <div class="row">
            <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endsection
