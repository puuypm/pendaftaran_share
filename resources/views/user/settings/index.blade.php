@extends('layouts2.app')

@section('title', $title)

@section('content')
<div class="row">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row card-tools-still-right">
                    <div class="card-title">Data-data Tahunan
                        <p class="card-category">
                            {{$desc}}
                        </p>
                    </div>
                    <div class="card-tools">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Aktivitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($participants as $participant)
                        <tr>
                            <td>{{$participant->tahun_created}}</td>
                            <td>
                                <ol class="activity-feed">
                                    <li class="feed-item feed-item-secondary">
                                        <time class="date">{{$participant->tahun_created}}</time>
                                        <span class="text">Klik disini untuk melihat data-data peserta >> <a href="{{route('user.settings.show', $participant->tahun_created)}}">"Participant"</a></span>
                                    </li>
                                </ol>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let table = new DataTable('#myTable', {
            // Atur konfigurasi DataTables sesuai kebutuhan Anda
        });
    });
</script>
@endsection
