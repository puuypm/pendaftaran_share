@extends('layouts2.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <form action="{{route('user.update', $edit->id)}}" method="post" enctype="multipart/form-data">
            @csrf            
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
