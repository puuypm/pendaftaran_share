@extends('layouts2.app')
@section('title', $title)
@section('content')
<div class="row">
    <div class="col-md-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <p class="card-category">
                    Aktifkan Gelombang untuk menampilkan data peserta per-Gelombang
                </p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.updateAll') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form">
                        @php
                            $no = 1;   
                        @endphp
                        @foreach ($gelombangs as $gelombang)
                        <div class="form-group form-show-notify row">
                            <div class="col-lg-3 col-md-3 col-sm-4 text-end">
                                <label>Gelombang_{{ $no++ }} :</label>
                            </div>
                            <div class="col-lg-6 col-md-9 col-sm-8">
                                <ul class="nav nav-pills nav-primary">
                                    <li class="nav-item me-2">
                                        <label class="nav-link">
                                            <input type="radio" name="gelombang[{{ $gelombang->id }}]" value="1" {{ $gelombang->aktif == 1 ? 'checked' : '' }}> Aktif
                                        </label>
                                    </li>
                                    <li class="nav-item me-2">
                                        <label class="nav-link">
                                            <input type="radio" name="gelombang[{{ $gelombang->id }}]" value="0" {{ $gelombang->aktif == 0 ? 'checked' : '' }}> Tidak Aktif
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <div class="form">
                            <div class="form-group from-show-notify row">
                                <div class="col-lg-3 col-md-3 col-sm-12"></div>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <button type="submit" class="btn btn-success">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
