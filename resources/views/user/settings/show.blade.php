@extends('layouts2.app')

@section('title', 'Detail Participant')

@section('content')
<div class="card card-round">
    <div class="card-header">
        Data Participant per-Jurusan yang tidak aktif
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jurusan</th>
                            <th>Lihat Selengkapnya</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                            @foreach ($jurusans as $item)
                            <tr>
                                <td>
                                    <strong>{{ $loop->iteration }}.</strong>
                                </td>
                                <td>
                                    <p>{{ $item->nama_jurusan }}</p>
                                </td>
                                <td>
                                    {{-- Menyusun URL dengan route --}}
                                    <a href="{{ route('user.settings.riwayat.index', ['idJurusan' => $item->id, 'tahun_created' => $tahun_created]) }}">Selengkapnya...</a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <a href="{{ url('user/settings/index') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endsection
