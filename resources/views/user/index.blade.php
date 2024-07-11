@extends('layouts2.app')

@section('title', $title)

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-12">
        <div class="card card-round">
            <div class="card-header">
                <div class="card-head-row">
                    <div align="left" class="mb-3">
                        {{-- <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a> --}}
                    </div>
                    <div class="card-tools">
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                            <span class="btn-label">
                                <i class="fa fa-print"></i>
                            </span>
                            Print
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 475px">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Action</th>
                                    <th>Gelombang</th>
                                    <th>Jurusan</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>                          
                                @foreach  ($participants as $index => $participant)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="text-center">
                                        {{-- Example of view link --}}
                                        <a href="{{route('user.show', $participant->id)}}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td> 
                                    <td>
                                        {{-- Menampilkan nama gelombang --}}
                                        @php
                                            $gelombang = ($participant->id_gelombang == 1) ? 'Gelombang 1' : (($participant->id_gelombang == 2) ? 'Gelombang 2' : 'Gelombang 3');
                                        @endphp
                                        {{ $gelombang }}
                                    </td>
                                    <td>{{ $participant->jurusan->nama_jurusan }}</td> <!-- Contoh akses field dari relasi -->
                                    <td>{{ $participant->nik }}</td>
                                    <td>{{ $participant->nama_lengkap }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="myChartLegend"></div>
            </div>
        </div>
    </div>
</div>
@endsection
